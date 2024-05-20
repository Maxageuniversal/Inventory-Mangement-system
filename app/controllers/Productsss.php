<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Products extends MY_Controller
{

    function __construct()
    {
        parent::__construct();
        if (!$this->loggedIn) {
            $this->session->set_userdata('requested_page', $this->uri->uri_string());
            redirect('login');
        }
        $this->lang->load('products', $this->Settings->language);
        $this->load->library('form_validation');
        $this->load->model('products_model');
        $this->digital_upload_path = 'files/';
        $this->upload_path = 'assets/uploads/';
        $this->thumbs_path = 'assets/uploads/thumbs/';
        $this->image_types = 'gif|jpg|jpeg|png|tif';
        $this->digital_file_types = 'zip|psd|ai|rar|pdf|doc|docx|xls|xlsx|ppt|pptx|gif|jpg|jpeg|png|tif|txt';
        $this->allowed_file_size = '1024';
        $this->popup_attributes = array('width' => '900', 'height' => '600', 'window_name' => 'sma_popup', 'menubar' => 'yes', 'scrollbars' => 'yes', 'status' => 'no', 'resizable' => 'yes', 'screenx' => '0', 'screeny' => '0');
    }

    function index($warehouse_id = NULL)
    {
        $this->sma->checkPermissions();

        $this->data['error'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');
        if ($this->Owner || $this->Admin) {
            $this->data['warehouses'] = $this->site->getAllWarehouses();
            $this->data['warehouse_id'] = $warehouse_id;
            $this->data['warehouse'] = $warehouse_id ? $this->site->getWarehouseByID($warehouse_id) : NULL;
        } else {
            $this->data['warehouses'] = NULL;
            $this->data['warehouse_id'] = $this->session->userdata('warehouse_id');
            $this->data['warehouse'] = $this->session->userdata('warehouse_id') ? $this->site->getWarehouseByID($this->session->userdata('warehouse_id')) : NULL;
        }

        $bc = array(array('link' => base_url(), 'page' => lang('home')), array('link' => '#', 'page' => lang('products')));
        $meta = array('page_title' => lang('products'), 'bc' => $bc);
        $this->page_construct('products/index', $meta, $this->data);
    }

    function getProducts($warehouse_id = NULL)
    {
        $this->sma->checkPermissions('index');

        if (!$this->Owner && !$warehouse_id) {
            $user = $this->site->getUser();
            $warehouse_id = $user->warehouse_id;
        }
        $detail_link = anchor('products/view/$1', '<i class="fa fa-file-text-o"></i> ' . lang('product_details'));
        $delete_link = "<a href='#' class='tip po' title='<b>" . $this->lang->line("delete_product") . "</b>' data-content=\"<p>"
            . lang('r_u_sure') . "</p><a class='btn btn-danger po-delete1' id='a__$1' href='" . site_url('products/delete/$1') . "'>"
            . lang('i_m_sure') . "</a> <button class='btn po-close'>" . lang('no') . "</button>\"  rel='popover'><i class=\"fa fa-trash-o\"></i> "
            . lang('delete_product') . "</a>";
        $single_barcode = anchor_popup('products/single_barcode/$1/' . ($warehouse_id ? $warehouse_id : ''), '<i class="fa fa-print"></i> ' . lang('print_barcode'), $this->popup_attributes);
        $single_label = anchor_popup('products/single_label/$1/' . ($warehouse_id ? $warehouse_id : ''), '<i class="fa fa-print"></i> ' . lang('print_label'), $this->popup_attributes);
        $action = '<div class="text-center"><div class="btn-group text-left">'
            . '<button type="button" class="btn btn-default btn-xs btn-primary dropdown-toggle" data-toggle="dropdown">'
            . lang('actions') . ' <span class="caret"></span></button>
		<ul class="dropdown-menu pull-right" role="menu">
			<li>' . $detail_link . '</li>
			<li><a href="' . site_url('products/add/$1') . '"><i class="fa fa-plus-square"></i> ' . lang('duplicate_product') . '</a></li>
			<li><a href="' . site_url('products/edit/$1') . '"><i class="fa fa-edit"></i> ' . lang('edit_product') . '</a></li>';
        if ($warehouse_id) {
            $action .= '<li><a href="' . site_url('products/set_rack/$1/' . $warehouse_id) . '" data-toggle="modal" data-target="#myModal"><i class="fa fa-bars"></i> '
                . lang('set_rack') . '</a></li>';
        }
        $action .= '<li><a href="' . site_url() . 'assets/uploads/$2" data-type="image" data-toggle="lightbox"><i class="fa fa-file-photo-o"></i> '
            . lang('view_image') . '</a></li>
			<li>' . $single_barcode . '</li>
			<li>' . $single_label . '</li>
			<li><a href="' . site_url('products/add_adjustment/$1/' . ($warehouse_id ? $warehouse_id : '')) . '" data-toggle="modal" data-target="#myModal"><i class="fa fa-filter"></i> '
            . lang('adjust_quantity') . '</a></li>
				<li class="divider"></li>
				<li>' . $delete_link . '</li>
			</ul>
		</div></div>';
        $this->load->library('datatables');
        if ($warehouse_id) {
            $this->datatables
                ->select($this->db->dbprefix('warehouses_products') . ".product_id as productid, " . $this->db->dbprefix('products') . ".image as image, " . $this->db->dbprefix('products') . ".code as code, " . $this->db->dbprefix('products') . ".name as name, " . $this->db->dbprefix('categories') . ".name as cname, cost as cost, price as price, " . $this->db->dbprefix('warehouses_products') . ".quantity as quantity, unit, " . $this->db->dbprefix('warehouses_products') . ".rack as rack, alert_quantity", FALSE)
                ->from('warehouses_products')
                ->join('products', 'products.id=warehouses_products.product_id', 'left')
                ->join('categories', 'products.category_id=categories.id', 'left')
                ->where('warehouses_products.warehouse_id', $warehouse_id)
                //->where('warehouses_products.quantity !=', 0)
                ->group_by("warehouses_products.product_id");
        } else {
            $this->datatables
                ->select($this->db->dbprefix('products') . ".id as productid, " . $this->db->dbprefix('products') . ".image as image, " . $this->db->dbprefix('products') . ".code as code, " . $this->db->dbprefix('products') . ".name as name, " . $this->db->dbprefix('categories') . ".name as cname, cost as cost, price as price, COALESCE(quantity, 0) as quantity, unit, NULL as rack, alert_quantity", FALSE)
                ->from('products')
                ->join('categories', 'products.category_id=categories.id', 'left')
                ->group_by("products.id");
        }
        if (!$this->Owner && !$this->Admin) {
            if (!$this->session->userdata('show_cost')) {
                $this->datatables->unset_column("cost");
            }
            if (!$this->session->userdata('show_price')) {
                $this->datatables->unset_column("price");
            }
        }
        $this->datatables->add_column("Actions", $action, "productid, image, code, name");
        echo $this->datatables->generate();
    }

    function set_rack($product_id = NULL, $warehouse_id = NULL)
    {
        $this->sma->checkPermissions(false, true);

        $this->form_validation->set_rules('rack', lang("rack_location"), 'trim|required');

        if ($this->form_validation->run() == true) {
            $data = array('rack' => $this->input->post('rack'),
                'product_id' => $product_id,
                'warehouse_id' => $warehouse_id,
            );
        } elseif ($this->input->post('set_rack')) {
            $this->session->set_flashdata('error', validation_errors());
            redirect("products");
        }

        if ($this->form_validation->run() == true && $this->products_model->setRack($data)) {
            $this->session->set_flashdata('message', lang("rack_set"));
            redirect("products/" . $warehouse_id);
        } else {
            $this->data['error'] = validation_errors() ? validation_errors() : $this->session->flashdata('error');
            $this->data['warehouse_id'] = $warehouse_id;
            $this->data['product'] = $this->site->getProductByID($product_id);
            $wh_pr = $this->products_model->getProductQuantity($product_id, $warehouse_id);
            $this->data['rack'] = $wh_pr['rack'];
            $this->data['modal_js'] = $this->site->modal_js();
            $this->load->view($this->theme . 'products/set_rack', $this->data);

        }
    }

    function product_barcode($product_code = NULL, $bcs = 'code39', $height = 60)
    {
        return "<img src='" . site_url('products/gen_barcode/' . $product_code . '/' . $bcs . '/' . $height) . "' alt='{$product_code}' />";
    }

    function barcode($product_code = NULL, $bcs = 'code39', $height = 60)
    {
        return site_url('products/gen_barcode/' . $product_code . '/' . $bcs . '/' . $height);
    }

    function gen_barcode($product_code = NULL, $bcs = 'code39', $height = 60, $text = 1)
    {
        $drawText = ($text != 1) ? FALSE : TRUE;
        $this->load->library('zend');
        $this->zend->load('Zend/Barcode');
        $barcodeOptions = array('text' => $product_code, 'barHeight' => $height, 'drawText' => $drawText);
        $rendererOptions = array('imageType' => 'png', 'horizontalPosition' => 'center', 'verticalPosition' => 'middle');
        $imageResource = Zend_Barcode::render($bcs, 'image', $barcodeOptions, $rendererOptions);
        return $imageResource;

    }

    function single_barcode($product_id = NULL, $warehouse_id = NULL)
    {
        $this->sma->checkPermissions('barcode', true);

        $product = $this->products_model->getProductByID($product_id);
        $currencies = $this->site->getAllCurrencies();

        $this->data['product'] = $product;
        $options = $this->products_model->getProductOptionsWithWH($product_id);

        $table = '';
        if (!empty($options)) {
            $r = 1;
            foreach ($options as $option) {
                $quantity = ($option->quantity <= 0) ? 2 : $option->quantity;
                $warehouse = $this->site->getWarehouseByID($option->warehouse_id);
                $table .= '<h3 class="'.($option->quantity ? '' : 'text-danger').'">'.$warehouse->name.' ('.$warehouse->code.') - '.$product->name.' - '.$option->name.' ('.lang('quantity').': '.$option->quantity.')</h3>';
                $table .= '<table class="table table-bordered barcodes"><tbody><tr>';
                for($i=0; $i < $quantity; $i++) {

                    $table .= '<td style="width: 20px;"><table class="table-barcode"><tbody><tr><td colspan="2" class="bold">' . $this->Settings->site_name . '</td></tr><tr><td colspan="2">' . $product->name . '</td></tr><tr><td colspan="2" class="text-center bc">' . $this->product_barcode($product->code, $product->barcode_symbology, 60) . '<br><strong>' . $option->name . '</strong><br>' . $this->product_barcode($product->code . ' ' . $option->id, 'code39', 60) . '</td></tr>';
                    foreach ($currencies as $currency) {
                        $table .= '<tr><td class="text-left">' . $currency->code . '</td><td class="text-right">' . $this->sma->formatMoney($product->price * $currency->rate) . '</td></tr>';
                    }
                    $table .= '</tbody></table>';
                    $table .= '</td>';
                    $table .= ((bool)($i & 1)) ? '</tr><tr>' : '';

                }
                $r++;
                $table .= '</tr></tbody></table><hr>';
            }
        } else {
            $table .= '<table class="table table-bordered barcodes"><tbody><tr>';
            $num = $product->quantity ? $product->quantity : 8;
            for ($r = 1; $r <= $num; $r++) {
                if ($r != 1) {
                    $rw = (bool)($r & 1);
                    $table .= $rw ? '</tr><tr>' : '';
                }
                $table .= '<td style="width: 20px;"><table class="table-barcode"><tbody><tr><td colspan="2" class="bold">' . $this->Settings->site_name . '</td></tr><tr><td colspan="2">' . $product->name . '</td></tr><tr><td colspan="2" class="text-center bc">' . $this->product_barcode($product->code, $product->barcode_symbology, 60) . '</td></tr>';
                foreach ($currencies as $currency) {
                    $table .= '<tr><td class="text-left">' . $currency->code . '</td><td class="text-right">' . $this->sma->formatMoney($product->price * $currency->rate) . '</td></tr>';
                }
                $table .= '</tbody></table>';
                $table .= '</td>';
            }
            $table .= '</tr></tbody></table>';
        }

        $this->data['table'] = $table;

        $this->data['page_title'] = lang("print_barcodes");
        $this->load->view($this->theme . 'products/single_barcode', $this->data);
    }

    function single_label($product_id = NULL, $warehouse_id = NULL)
    {
        $this->sma->checkPermissions('barcode', true);

        $product = $this->products_model->getProductByID($product_id);
        $currencies = $this->site->getAllCurrencies();

        $this->data['product'] = $product;
        $options = $this->products_model->getProductOptionsWithWH($product_id);

        $table = '';
        if (!empty($options)) {
            $r = 1;
            foreach ($options as $option) {
                $quantity = ($option->quantity <= 0) ? 4 : $option->quantity;
                $warehouse = $this->site->getWarehouseByID($option->warehouse_id);
                $table .= '<h3 class="'.($option->quantity ? '' : 'text-danger').'">'.$warehouse->name.' ('.$warehouse->code.') - '.$product->name.' - '.$option->name.' ('.lang('quantity').': '.$option->quantity.')</h3>';
                $table .= '<table class="table table-bordered barcodes"><tbody><tr>';
                for($i=0; $i < $quantity; $i++) {
                    if ($i % 4 == 0 && $i > 3) {
                        $table .= '</tr><tr>';
                    }
                    $table .= '<td style="width: 20px;"><table class="table-barcode"><tbody><tr><td colspan="2" class="bold">' . $this->Settings->site_name . '</td></tr><tr><td colspan="2">' . $product->name . '</td></tr><tr><td colspan="2" class="text-center bc">' . $this->product_barcode($product->code, $product->barcode_symbology, 30) . '<br><strong>' . $option->name . '</strong><br>' . $this->product_barcode($product->code . ' ' . $option->id, 'code39', 30) . '</td></tr>';
                    foreach ($currencies as $currency) {
                        $table .= '<tr><td class="text-left">' . $currency->code . '</td><td class="text-right">' . $this->sma->formatMoney($product->price * $currency->rate) . '</td></tr>';
                    }
                    $table .= '</tbody></table>';
                    $table .= '</td>';
                }
                $r++;
                $table .= '</tr></tbody></table><hr>';
            }
        } else {
            $table .= '<table class="table table-bordered barcodes"><tbody><tr>';
            $num = $product->quantity ? $product->quantity : 16;
            for ($r = 1; $r <= $num; $r++) {
                $table .= '<td style="width: 20px;"><table class="table-barcode"><tbody><tr><td colspan="2" class="bold">' . $this->Settings->site_name . '</td></tr><tr><td colspan="2">' . $product->name . '</td></tr><tr><td colspan="2" class="text-center bc">' . $this->product_barcode($product->code, $product->barcode_symbology, 30) . '</td></tr>';
                foreach ($currencies as $currency) {
                    $table .= '<tr><td class="text-left">' . $currency->code . '</td><td class="text-right">' . $this->sma->formatMoney($product->price * $currency->rate) . '</td></tr>';
                }
                $table .= '</tbody></table>';
                $table .= '</td>';
                if ($r % 4 == 0 && $r > 3) {
                    $table .= '</tr><tr>';
                }
            }
            $table .= '</tr></tbody></table>';
        }

        $this->data['table'] = $table;
        $this->data['page_title'] = lang("barcode_label");
        $this->load->view($this->theme . 'products/single_label', $this->data);
    }

    function single_label2($product_id = NULL, $warehouse_id = NULL)
    {
        $this->sma->checkPermissions('barcode', true);

        $pr = $this->products_model->getProductByID($product_id);
        $currencies = $this->site->getAllCurrencies();

        $this->data['product'] = $pr;
        $options = $this->products_model->getProductOptionsWithWH($product_id);
        $html = "";

        if (!empty($options)) {
            $r = 1;
            foreach ($options as $option) {
                $html .= '<div class="labels"><strong>' . $pr->name . '</strong><br>' . $this->product_barcode($pr->code, $pr->barcode_symbology, 25) . '<br><span class="price">'.lang('price') .': ' .$this->Settings->default_currency. ' ' . $this->sma->formatMoney($pr->price) . '</span></div>';
                $r++;
            }
        } else {
            for ($r = 1; $r <= 16; $r++) {
                $html .= '<div class="labels"><strong>' . $pr->name . '</strong><br>' . $this->product_barcode($pr->code, $pr->barcode_symbology, 25) . '<br><span class="price">'.lang('price') .': ' .$this->Settings->default_currency. ' ' . $this->sma->formatMoney($pr->price) . '</span></div>';
            }
        }

        $this->data['html'] = $html;
        $this->data['page_title'] = lang("barcode_label");
        $this->load->view($this->theme . 'products/single_label2', $this->data);
    }

    function print_barcodes($category_id = NULL, $per_page = 0)
    {
        $this->sma->checkPermissions('barcode', true);

        $this->load->library('pagination');
        $config['base_url'] = site_url('products/print_barcodes/' . ($category_id ? $category_id : 0));
        $config['total_rows'] = $this->products_model->products_count($category_id);
        $config['per_page'] = 8;
        $config['num_links'] = 4;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $this->pagination->initialize($config);
        $currencies = $this->site->getAllCurrencies();
        $products = $this->products_model->fetch_products($category_id, $config['per_page'], $per_page);
        $r = 1;
        $html = "";
        $html .= '<table class="table table-bordered sheettable"><tbody><tr>';
        foreach ($products as $pr) {
            if ($r != 1) {
                $rw = (bool)($r & 1);
                $html .= $rw ? '</tr><tr>' : '';
            }
            $html .= '<td colspan="2" class="text-center"><h3>' . $this->Settings->site_name . '</h3>' . $pr->name . '<br>' . $this->product_barcode($pr->code, $pr->barcode_symbology, 60);
            $html .= '<table class="table table-bordered">';
            foreach ($currencies as $currency) {
                $html .= '<tr><td class="text-left">' . $currency->code . '</td><td class="text-right">' . $this->sma->formatMoney($pr->price * $currency->rate) . '</td></tr>';
            }
            $html .= '</table>';
            $html .= '</td>';
            $r++;
        }
        if (!(bool)($r & 1)) {
            $html .= '<td></td>';
        }
        $html .= '</tr></tbody></table>';

        $this->data['r'] = $r;
        $this->data['html'] = $html;
        $this->data['links'] = $this->pagination->create_links();
        $this->data['page_title'] = $this->lang->line("print_barcodes");
        $this->data['categories'] = $this->site->getAllCategories();
        $this->data['category_id'] = $category_id;

        $bc = array(array('link' => base_url(), 'page' => lang('home')), array('link' => site_url('products'), 'page' => lang('products')), array('link' => '#', 'page' => lang('print_barcodes')));
        $meta = array('page_title' => lang('print_barcodes'), 'bc' => $bc);
        $this->page_construct('products/print_barcodes', $meta, $this->data);
    }

    function print_labels($category_id = NULL, $per_page = 0)
    {
        $this->sma->checkPermissions('barcode', true);

        $this->load->library('pagination');
        $config['base_url'] = site_url('products/print_labels/' . ($category_id ? $category_id : 0));
        $config['total_rows'] = $this->products_model->products_count($category_id);
        $config['per_page'] = 16;
        $config['num_links'] = 4;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a>';
        $config['cur_tag_close'] = '</a></li>';
        $this->pagination->initialize($config);
        $currencies = $this->site->getAllCurrencies();
        $products = $this->products_model->fetch_products($category_id, $config['per_page'], $per_page);
        $r = 1;
        $html = "";
        $html .= '<table class="table table-bordered table-condensed bartable"><tbody><tr>';
        foreach ($products as $pr) {

            $html .= '<td class="text-center"><h4>' . $this->Settings->site_name . '</h4>' . $pr->name . '<br>' . $this->product_barcode($pr->code, $pr->barcode_symbology, 30);
            $html .= '<table class="table table-bordered">';
            foreach ($currencies as $currency) {
                $html .= '<tr><td class="text-left">' . $currency->code . '</td><td class="text-right">' . $this->sma->formatMoney($pr->price * $currency->rate) . '</td></tr>';
            }
            $html .= '</table>';
            $html .= '</td>';

            if ($r % 4 == 0) {
                $html .= '</tr><tr>';
            }
            $r++;
        }
        if ($r < 4) {
            for ($i = $r; $i <= 4; $i++) {
                $html .= '<td></td>';
            }
        }
        $html .= '</tr></tbody></table>';

        $this->data['r'] = $r;
        $this->data['html'] = $html;
        $this->data['links'] = $this->pagination->create_links();
        $this->data['categories'] = $this->site->getAllCategories();
        $this->data['category_id'] = $category_id;
        $this->data['print_link'] = anchor_popup('products/print_labels2/' . ($category_id ? $category_id : ''), '<i class="icon fa fa-file"></i> ' . lang('label_printer'), $this->popup_attributes);
        $bc = array(array('link' => base_url(), 'page' => lang('home')), array('link' => site_url('products'), 'page' => lang('products')), array('link' => '#', 'page' => lang('print_labels')));
        $meta = array('page_title' => lang('print_labels'), 'bc' => $bc);
        $this->page_construct('products/print_labels', $meta, $this->data);

    }

    function print_labels2($category_id = NULL, $per_page = 0)
    {
        $links = '';
        if($this->input->post('print_selected')) {
            $html = "";
            foreach ($this->input->post('val') as $id) {
                $pr = $this->site->getProductByID($id);
                $html .= '<div class="labels"><strong>' . $pr->name . '</strong><br>' . $this->product_barcode($pr->code, $pr->barcode_symbology, 25) . '<br><span class="price">'.lang('price') .': ' .$this->Settings->default_currency. ' ' . $this->sma->formatMoney($pr->price) . '</span></div>';
            }

        } else {

            $this->sma->checkPermissions('barcode', true);
            $this->load->library('pagination');
            $config['base_url'] = site_url('products/print_labels2/' . ($category_id ? $category_id : 0));
            $config['total_rows'] = $this->products_model->products_count($category_id);
            $config['per_page'] = 16;
            $config['num_links'] = 4;
            $config['full_tag_open'] = '<ul class="pagination">';
            $config['full_tag_close'] = '</ul>';
            $config['first_tag_open'] = '<li>';
            $config['first_tag_close'] = '</li>';
            $config['last_tag_open'] = '<li>';
            $config['last_tag_close'] = '</li>';
            $config['next_tag_open'] = '<li>';
            $config['next_tag_close'] = '</li>';
            $config['prev_tag_open'] = '<li>';
            $config['prev_tag_close'] = '</li>';
            $config['num_tag_open'] = '<li>';
            $config['num_tag_close'] = '</li>';
            $config['cur_tag_open'] = '<li class="active"><a>';
            $config['cur_tag_close'] = '</a></li>';
            $this->pagination->initialize($config);
            $currencies = $this->site->getAllCurrencies();
            $products = $this->products_model->fetch_products($category_id, $config['per_page'], $per_page);

            $html = "";
            foreach ($products as $pr) {
                $html .= '<div class="labels"><strong>' . $pr->name . '</strong><br>' . $this->product_barcode($pr->code, $pr->barcode_symbology, 25) . '<br><span class="price">'.lang('price') .': ' .$this->Settings->default_currency. ' ' . $this->sma->formatMoney($pr->price) . '</span></div>';
            }
            $links = $this->pagination->create_links();
        }
        $this->data['html'] = $html;
        $this->data['links'] = $links;
        $this->data['categories'] = $this->site->getAllCategories();
        $this->data['category_id'] = $category_id;
        $this->data['page_title'] = lang('print_labels');
        $this->load->view($this->theme.'products/print_labels2',$this->data);

    }

    /* ------------------------------------------------------- */

    function add($id = NULL)
    {
        $this->sma->checkPermissions();
        $this->load->helper('security');
        $warehouses = $this->site->getAllWarehouses();
        if ($this->input->post('type') == 'standard') {
            $this->form_validation->set_rules('cost', lang("product_cost"), 'required');
        }
        if ($this->input->post('barcode_symbology') == 'ean13') {
            $this->form_validation->set_rules('code', lang("product_code"), 'min_length[13]|max_length[13]');
        }
        $this->form_validation->set_rules('code', lang("product_code"), 'is_unique[products.code]');
        $this->form_validation->set_rules('product_image', lang("product_image"), 'xss_clean');
        $this->form_validation->set_rules('digital_file', lang("digital_file"), 'xss_clean');
        $this->form_validation->set_rules('userfile', lang("product_gallery_images"), 'xss_clean');
        if ($this->form_validation->run() == true) {
            $tax_rate = $this->input->post('tax_rate') ? $this->site->getTaxRateByID($this->input->post('tax_rate')) : NULL;
            $data = array(
                'code' => $this->input->post('code'),
                'barcode_symbology' => $this->input->post('barcode_symbology'),
                'name' => $this->input->post('name'),
                'type' => $this->input->post('type'),
                'category_id' => $this->input->post('category'),
                'subcategory_id' => $this->input->post('subcategory'),
                'cost' => $this->sma->formatDecimal($this->input->post('cost')),
                'price' => $this->sma->formatDecimal($this->input->post('price')),
                'unit' => $this->input->post('unit'),
                'tax_rate' => $this->input->post('tax_rate'),
                'tax_method' => $this->input->post('tax_method'),
                'alert_quantity' => $this->input->post('alert_quantity'),
                'track_quantity' => $this->input->post('track_quantity') ? $this->input->post('track_quantity') : '0',
                'details' => $this->input->post('details'),
                'product_details' => $this->input->post('product_details'),
                'supplier1' => $this->input->post('supplier'),
                'supplier1price' => $this->sma->formatDecimal($this->input->post('supplier_price')),
                'supplier2' => $this->input->post('supplier_2'),
                'supplier2price' => $this->sma->formatDecimal($this->input->post('supplier_2_price')),
                'supplier3' => $this->input->post('supplier_3'),
                'supplier3price' => $this->sma->formatDecimal($this->input->post('supplier_3_price')),
                'supplier4' => $this->input->post('supplier_4'),
                'supplier4price' => $this->sma->formatDecimal($this->input->post('supplier_4_price')),
                'supplier5' => $this->input->post('supplier_5'),
                'supplier5price' => $this->sma->formatDecimal($this->input->post('supplier_5_price')),
                'cf1' => $this->input->post('cf1'),
                'cf2' => $this->input->post('cf2'),
                'cf3' => $this->input->post('cf3'),
                'cf4' => $this->input->post('cf4'),
                'cf5' => $this->input->post('cf5'),
                'cf6' => $this->input->post('cf6'),
            );
            $this->load->library('upload');
            if ($this->input->post('type') == 'standard') {
                $wh_total_quantity = 0;
                $pv_total_quantity = 0;
                for ($s = 2; $s > 5; $s++) {
                    $data['suppliers' . $s] = $this->input->post('supplier_' . $s);
                    $data['suppliers' . $s . 'price'] = $this->input->post('supplier_' . $s . '_price');
                }
                foreach ($warehouses as $warehouse) {
                    if ($this->input->post('wh_qty_' . $warehouse->id)) {
                        $warehouse_qty[] = array(
                            'warehouse_id' => $this->input->post('wh_' . $warehouse->id),
                            'quantity' => $this->input->post('wh_qty_' . $warehouse->id),
                            'rack' => $this->input->post('rack_' . $warehouse->id) ? $this->input->post('rack_' . $warehouse->id) : NULL
                        );
                        $wh_total_quantity += $this->input->post('wh_qty_' . $warehouse->id);
                    }
                }

                if ($this->input->post('attributes')) {
                    $a = sizeof($_POST['attr_name']);
                    for ($r = 0; $r <= $a; $r++) {
                        if (isset($_POST['attr_name'][$r])) {
                            $product_attributes[] = array(
                                'name' => $_POST['attr_name'][$r],
                                'warehouse_id' => $_POST['attr_warehouse'][$r],
                                'quantity' => $_POST['attr_quantity'][$r],
                                'cost' => $_POST['attr_cost'][$r],
                                'price' => $_POST['attr_price'][$r],
                            );
                            $pv_total_quantity += $_POST['attr_quantity'][$r];
                        }
                    }

                } else {
                    $product_attributes = NULL;
                }

                if ($wh_total_quantity != $pv_total_quantity && $pv_total_quantity != 0) {
                    $this->form_validation->set_rules('wh_pr_qty_issue', 'wh_pr_qty_issue', 'required');
                    $this->form_validation->set_message('required', lang('wh_pr_qty_issue'));
                }
            } else {
                $warehouse_qty = NULL;
                $product_attributes = NULL;
            }

            if ($this->input->post('type') == 'service') {
                $data['track_quantity'] = 0;
            } elseif ($this->input->post('type') == 'combo') {
                $total_price = 0;
                $c = sizeof($_POST['combo_item_code']) - 1;
                for ($r = 0; $r <= $c; $r++) {
                    if (isset($_POST['combo_item_code'][$r]) && isset($_POST['combo_item_quantity'][$r]) && isset($_POST['combo_item_price'][$r])) {
                        $items[] = array(
                            'item_code' => $_POST['combo_item_code'][$r],
                            'quantity' => $_POST['combo_item_quantity'][$r],
                            'unit_price' => $_POST['combo_item_price'][$r],
                        );
                    }
                    $total_price += $_POST['combo_item_price'][$r] * $_POST['combo_item_quantity'][$r];
                }
                if ($this->sma->formatDecimal($total_price) != $this->sma->formatDecimal($this->input->post('price'))) {
                    $this->form_validation->set_rules('combo_price', 'combo_price', 'required');
                    $this->form_validation->set_message('required', lang('pprice_not_match_ciprice'));
                }
                $data['track_quantity'] = 0;
            } elseif ($this->input->post('type') == 'digital') {
                if ($_FILES['digital_file']['size'] > 0) {
                    $config['upload_path'] = $this->digital_upload_path;
                    $config['allowed_types'] = $this->digital_file_types;
                    $config['max_size'] = $this->allowed_file_size;
                    $config['overwrite'] = FALSE;
                    $config['encrypt_name'] = TRUE;
                    $config['max_filename'] = 25;
                    $this->upload->initialize($config);
                    if (!$this->upload->do_upload('digital_file')) {
                        $error = $this->upload->display_errors();
                        $this->session->set_flashdata('error', $error);
                        redirect("products/add");
                    }
                    $file = $this->upload->file_name;
                    $data['file'] = $file;
                } else {
                    $this->form_validation->set_rules('digital_file', lang("digital_file"), 'required');
                }
                $config = NULL;
                $data['track_quantity'] = 0;
            }
            if (!isset($items)) {
                $items = NULL;
            }
            if ($_FILES['product_image']['size'] > 0) {

                $config['upload_path'] = $this->upload_path;
                $config['allowed_types'] = $this->image_types;
                $config['max_size'] = $this->allowed_file_size;
                $config['max_width'] = $this->Settings->iwidth;
                $config['max_height'] = $this->Settings->iheight;
                $config['overwrite'] = FALSE;
                $config['max_filename'] = 25;
                $config['encrypt_name'] = TRUE;
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('product_image')) {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect("products/add");
                }
                $photo = $this->upload->file_name;
                $data['image'] = $photo;
                $this->load->library('image_lib');
                $config['image_library'] = 'gd2';
                $config['source_image'] = $this->upload_path . $photo;
                $config['new_image'] = $this->thumbs_path . $photo;
                $config['maintain_ratio'] = TRUE;
                $config['width'] = $this->Settings->twidth;
                $config['height'] = $this->Settings->theight;
                $this->image_lib->clear();
                $this->image_lib->initialize($config);
                if (!$this->image_lib->resize()) {
                    echo $this->image_lib->display_errors();
                }
                if ($this->Settings->watermark) {
                    $this->image_lib->clear();
                    $wm['source_image'] = $this->upload_path . $photo;
                    $wm['wm_text'] = 'Copyright ' . date('Y') . ' - ' . $this->Settings->site_name;
                    $wm['wm_type'] = 'text';
                    $wm['wm_font_path'] = 'system/fonts/texb.ttf';
                    $wm['quality'] = '100';
                    $wm['wm_font_size'] = '16';
                    $wm['wm_font_color'] = '999999';
                    $wm['wm_shadow_color'] = 'CCCCCC';
                    $wm['wm_vrt_alignment'] = 'top';
                    $wm['wm_hor_alignment'] = 'right';
                    $wm['wm_padding'] = '10';
                    $this->image_lib->initialize($wm);
                    $this->image_lib->watermark();
                }
                $this->image_lib->clear();
                $config = NULL;
            }

            if ($_FILES['userfile']['name'][0] != "") {

                $config['upload_path'] = $this->upload_path;
                $config['allowed_types'] = $this->image_types;
                $config['max_size'] = $this->allowed_file_size;
                $config['max_width'] = $this->Settings->iwidth;
                $config['max_height'] = $this->Settings->iheight;
                $config['overwrite'] = FALSE;
                $config['encrypt_name'] = TRUE;
                $config['max_filename'] = 25;
                $files = $_FILES;
                $cpt = count($_FILES['userfile']['name']);
                for ($i = 0; $i < $cpt; $i++) {

                    $_FILES['userfile']['name'] = $files['userfile']['name'][$i];
                    $_FILES['userfile']['type'] = $files['userfile']['type'][$i];
                    $_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
                    $_FILES['userfile']['error'] = $files['userfile']['error'][$i];
                    $_FILES['userfile']['size'] = $files['userfile']['size'][$i];

                    $this->upload->initialize($config);

                    if (!$this->upload->do_upload()) {
                        $error = $this->upload->display_errors();
                        $this->session->set_flashdata('error', $error);
                        redirect("products/add");
                    } else {

                        $pho = $this->upload->file_name;

                        $photos[] = $pho;

                        $this->load->library('image_lib');
                        $config['image_library'] = 'gd2';
                        $config['source_image'] = $this->upload_path . $pho;
                        $config['new_image'] = $this->thumbs_path . $pho;
                        $config['maintain_ratio'] = TRUE;
                        $config['width'] = $this->Settings->twidth;
                        $config['height'] = $this->Settings->theight;

                        $this->image_lib->initialize($config);

                        if (!$this->image_lib->resize()) {
                            echo $this->image_lib->display_errors();
                        }

                        if ($this->Settings->watermark) {
                            $this->image_lib->clear();
                            $wm['source_image'] = $this->upload_path . $pho;
                            $wm['wm_text'] = 'Copyright ' . date('Y') . ' - ' . $this->Settings->site_name;
                            $wm['wm_type'] = 'text';
                            $wm['wm_font_path'] = 'system/fonts/texb.ttf';
                            $wm['quality'] = '100';
                            $wm['wm_font_size'] = '16';
                            $wm['wm_font_color'] = '999999';
                            $wm['wm_shadow_color'] = 'CCCCCC';
                            $wm['wm_vrt_alignment'] = 'top';
                            $wm['wm_hor_alignment'] = 'right';
                            $wm['wm_padding'] = '10';
                            $this->image_lib->initialize($wm);
                            $this->image_lib->watermark();
                        }

                        $this->image_lib->clear();
                    }
                }
                $config = NULL;
            } else {
                $photos = NULL;
            }
            $data['quantity'] = isset($wh_total_quantity) ? $wh_total_quantity : 0;
            // $this->sma->print_arrays($data, $warehouse_qty, $product_attributes);
        }

        if ($this->form_validation->run() == true && $this->products_model->addProduct($data, $items, $warehouse_qty, $product_attributes, $photos)) {
            $this->session->set_flashdata('message', lang("product_added"));
            redirect('products');
        } else {
            $this->data['error'] = (validation_errors() ? validation_errors() : $this->session->flashdata('error'));

            $this->data['categories'] = $this->site->getAllCategories();
            $this->data['tax_rates'] = $this->site->getAllTaxRates();
            $this->data['warehouses'] = $warehouses;
            $this->data['warehouses_products'] = $id ? $this->products_model->getAllWarehousesWithPQ($id) : NULL;
            $this->data['product'] = $id ? $this->products_model->getProductByID($id) : NULL;
            $this->data['variants'] = $this->products_model->getAllVariants();
            $this->data['combo_items'] = ($id && $this->data['product']->type == 'combo') ? $this->products_model->getProductComboItems($id) : NULL;
            $this->data['product_options'] = $id ? $this->products_model->getProductOptionsWithWH($id) : NULL;
            $bc = array(array('link' => base_url(), 'page' => lang('home')), array('link' => site_url('products'), 'page' => lang('products')), array('link' => '#', 'page' => lang('add_product')));
            $meta = array('page_title' => lang('add_product'), 'bc' => $bc);
            $this->page_construct('products/add', $meta, $this->data);
        }
    }

    function suggestions()
    {
        $term = $this->input->get('term', TRUE);
        if (strlen($term) < 1 || !$term) {
            die("<script type='text/javascript'>setTimeout(function(){ window.top.location.href = '" . site_url('welcome') . "'; }, 10);</script>");
        }

        $rows = $this->products_model->getProductNames($term);
        if ($rows) {
            foreach ($rows as $row) {
                $pr[] = array('id' => $row->id, 'label' => $row->name . " (" . $row->code . ")", 'code' => $row->code, 'name' => $row->name, 'price' => $row->price, 'qty' => 1);
            }
            echo json_encode($pr);
        } else {
            echo json_encode(array(array('id' => 0, 'label' => lang('no_match_found'), 'value' => $term)));
        }
    }

    function addByAjax()
    {
        if (!$this->mPermissions('add')) {
            exit(json_encode(array('msg' => lang('access_denied'))));
        }
        if ($this->input->get('token') && $this->input->get('token') == $this->session->userdata('user_csrf') && $this->input->is_ajax_request()) {
            $product = $this->input->get('product');
            if (!isset($product['code']) || empty($product['code'])) {
                exit(json_encode(array('msg' => lang('product_code_is_required'))));
            }
            if (!isset($product['name']) || empty($product['name'])) {
                exit(json_encode(array('msg' => lang('product_name_is_required'))));
            }
            if (!isset($product['category_id']) || empty($product['category_id'])) {
                exit(json_encode(array('msg' => lang('product_category_is_required'))));
            }
            if (!isset($product['unit']) || empty($product['unit'])) {
                exit(json_encode(array('msg' => lang('product_unit_is_required'))));
            }
            if (!isset($product['price']) || empty($product['price'])) {
                exit(json_encode(array('msg' => lang('product_price_is_required'))));
            }
            if (!isset($product['cost']) || empty($product['cost'])) {
                exit(json_encode(array('msg' => lang('product_cost_is_required'))));
            }
            if ($this->products_model->getProductByCode($product['code'])) {
                exit(json_encode(array('msg' => lang('product_code_already_exist'))));
            }
            if ($row = $this->products_model->addAjaxProduct($product)) {
                $tax_rate = $this->site->getTaxRateByID($row->tax_rate);
                $pr = array('id' => $row->id, 'label' => $row->name . " (" . $row->code . ")", 'code' => $row->code, 'qty' => 1, 'cost' => $row->cost, 'name' => $row->name, 'tax_method' => $row->tax_method, 'tax_rate' => $tax_rate, 'discount' => '0');
                echo json_encode(array('msg' => 'success', 'result' => $pr));
            } else {
                exit(json_encode(array('msg' => lang('failed_to_add_product'))));
            }
        } else {
            json_encode(array('msg' => 'Invalid token'));
        }

    }


    /* -------------------------------------------------------- */

    function edit($id = NULL)
    {
        $this->sma->checkPermissions();
        $this->load->helper('security');
        if ($this->input->post('id')) {
            $id = $this->input->post('id');
        }
        $warehouses = $this->site->getAllWarehouses();
        $warehouses_products = $this->products_model->getAllWarehousesWithPQ($id);
        $product = $this->site->getProductByID($id);
        if (!$id || !$product) {
            $this->session->set_flashdata('error', lang('prduct_not_found'));
            redirect($_SERVER["HTTP_REFERER"]);
        }
        if ($this->input->post('type') == 'standard') {
            $this->form_validation->set_rules('cost', lang("product_cost"), 'required');
        }
        if ($this->input->post('code') !== $product->code) {
            $this->form_validation->set_rules('code', lang("product_code"), 'is_unique[products.code]');
        }
        if ($this->input->post('barcode_symbology') == 'ean13') {
            $this->form_validation->set_rules('code', lang("product_code"), 'min_length[13]|max_length[13]');
        }
        $this->form_validation->set_rules('product_image', lang("product_image"), 'xss_clean');
        $this->form_validation->set_rules('digital_file', lang("digital_file"), 'xss_clean');
        $this->form_validation->set_rules('userfile', lang("product_gallery_images"), 'xss_clean');

        if ($this->form_validation->run('products/add') == true) {

            $data = array('code' => $this->input->post('code'),
                'barcode_symbology' => $this->input->post('barcode_symbology'),
                'name' => $this->input->post('name'),
                'type' => $this->input->post('type'),
                'category_id' => $this->input->post('category'),
                'subcategory_id' => $this->input->post('subcategory'),
                'cost' => $this->sma->formatDecimal($this->input->post('cost')),
                'price' => $this->sma->formatDecimal($this->input->post('price')),
                'unit' => $this->input->post('unit'),
                'tax_rate' => $this->input->post('tax_rate'),
                'tax_method' => $this->input->post('tax_method'),
                'alert_quantity' => $this->input->post('alert_quantity'),
                'track_quantity' => $this->input->post('track_quantity') ? $this->input->post('track_quantity') : '0',
                'details' => $this->input->post('details'),
                'product_details' => $this->input->post('product_details'),
                'supplier1' => $this->input->post('supplier'),
                'supplier1price' => $this->sma->formatDecimal($this->input->post('supplier_price')),
                'supplier2' => $this->input->post('supplier_2'),
                'supplier2price' => $this->sma->formatDecimal($this->input->post('supplier_2_price')),
                'supplier3' => $this->input->post('supplier_3'),
                'supplier3price' => $this->sma->formatDecimal($this->input->post('supplier_3_price')),
                'supplier4' => $this->input->post('supplier_4'),
                'supplier4price' => $this->sma->formatDecimal($this->input->post('supplier_4_price')),
                'supplier5' => $this->input->post('supplier_5'),
                'supplier5price' => $this->sma->formatDecimal($this->input->post('supplier_5_price')),
                'cf1' => $this->input->post('cf1'),
                'cf2' => $this->input->post('cf2'),
                'cf3' => $this->input->post('cf3'),
                'cf4' => $this->input->post('cf4'),
                'cf5' => $this->input->post('cf5'),
                'cf6' => $this->input->post('cf6'),
            );
            $this->load->library('upload');
            if ($this->input->post('type') == 'standard') {
                if ($product_variants = $this->products_model->getProductOptions($id)) {
                    foreach ($product_variants as $pv) {
                        $update_variants[] = array(
                            'id' => $this->input->post('variant_id_'.$pv->id),
                            'name' => $this->input->post('variant_name_'.$pv->id),
                            'cost' => $this->input->post('variant_cost_'.$pv->id),
                            'price' => $this->input->post('variant_price_'.$pv->id),
                        );
                    }
                } else {
                    $update_variants = NULL;
                }
                for ($s = 2; $s > 5; $s++) {
                    $data['suppliers' . $s] = $this->input->post('supplier_' . $s);
                    $data['suppliers' . $s . 'price'] = $this->input->post('supplier_' . $s . '_price');
                }
                foreach ($warehouses as $warehouse) {
                    $warehouse_qty[] = array(
                        'warehouse_id' => $this->input->post('wh_' . $warehouse->id),
                        'rack' => $this->input->post('rack_' . $warehouse->id) ? $this->input->post('rack_' . $warehouse->id) : NULL
                    );
                }

                if ($this->input->post('attributes')) {
                    $a = sizeof($_POST['attr_name']);
                    for ($r = 0; $r <= $a; $r++) {
                        if (isset($_POST['attr_name'][$r])) {
                            if ($product_variatnt = $this->products_model->getPrductVariantByPIDandName($id, trim($_POST['attr_name'][$r]))) {
                                $this->form_validation->set_message('required', lang("product_already_has_variant").' ('.$_POST['attr_name'][$r].')');
                                $this->form_validation->set_rules('new_product_variant', lang("new_product_variant"), 'required');
                            } else {
                                $product_attributes[] = array(
                                    'name' => $_POST['attr_name'][$r],
                                    'warehouse_id' => $_POST['attr_warehouse'][$r],
                                    'quantity' => $_POST['attr_quantity'][$r],
                                    'cost' => $_POST['attr_cost'][$r],
                                    'price' => $_POST['attr_price'][$r],
                                );
                            }
                        }
                    }

                } else {
                    $product_attributes = NULL;
                }

            } else {
                $warehouse_qty = NULL;
                $product_attributes = NULL;
            }

            if ($this->input->post('type') == 'service') {
                $data['track_quantity'] = 0;
            } elseif ($this->input->post('type') == 'combo') {
                $total_price = 0;
                $c = sizeof($_POST['combo_item_code']) - 1;
                for ($r = 0; $r <= $c; $r++) {
                    if (isset($_POST['combo_item_code'][$r]) && isset($_POST['combo_item_quantity'][$r]) && isset($_POST['combo_item_price'][$r])) {
                        $items[] = array(
                            'item_code' => $_POST['combo_item_code'][$r],
                            'quantity' => $_POST['combo_item_quantity'][$r],
                            'unit_price' => $_POST['combo_item_price'][$r],
                        );
                    }
                    $total_price += $_POST['combo_item_price'][$r] * $_POST['combo_item_quantity'][$r];
                }
                if ($this->sma->formatDecimal($total_price) != $this->sma->formatDecimal($this->input->post('price'))) {
                    $this->form_validation->set_rules('combo_price', 'combo_price', 'required');
                    $this->form_validation->set_message('required', lang('pprice_not_match_ciprice'));
                }
                $data['track_quantity'] = 0;
            } elseif ($this->input->post('type') == 'digital') {
                if ($_FILES['digital_file']['size'] > 0) {
                    $config['upload_path'] = $this->digital_upload_path;
                    $config['allowed_types'] = $this->digital_file_types;
                    $config['max_size'] = $this->allowed_file_size;
                    $config['overwrite'] = FALSE;
                    $config['encrypt_name'] = TRUE;
                    $config['max_filename'] = 25;
                    $this->upload->initialize($config);
                    if (!$this->upload->do_upload('digital_file')) {
                        $error = $this->upload->display_errors();
                        $this->session->set_flashdata('error', $error);
                        redirect("products/add");
                    }
                    $file = $this->upload->file_name;
                    $data['file'] = $file;
                } else {
                    $this->form_validation->set_rules('digital_file', lang("digital_file"), 'required');
                }
                $config = NULL;
                $data['track_quantity'] = 0;
            }
            if (!isset($items)) {
                $items = NULL;
            }
            if ($_FILES['product_image']['size'] > 0) {

                $config['upload_path'] = $this->upload_path;
                $config['allowed_types'] = $this->image_types;
                $config['max_size'] = $this->allowed_file_size;
                $config['max_width'] = $this->Settings->iwidth;
                $config['max_height'] = $this->Settings->iheight;
                $config['overwrite'] = FALSE;
                $config['encrypt_name'] = TRUE;
                $config['max_filename'] = 25;
                $this->upload->initialize($config);
                if (!$this->upload->do_upload('product_image')) {
                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect("products/edit/" . $id);
                }
                $photo = $this->upload->file_name;
                $data['image'] = $photo;
                $this->load->library('image_lib');
                $config['image_library'] = 'gd2';
                $config['source_image'] = $this->upload_path . $photo;
                $config['new_image'] = $this->thumbs_path . $photo;
                $config['maintain_ratio'] = TRUE;
                $config['width'] = $this->Settings->twidth;
                $config['height'] = $this->Settings->theight;
                $this->image_lib->clear();
                $this->image_lib->initialize($config);
                if (!$this->image_lib->resize()) {
                    echo $this->image_lib->display_errors();
                }
                if ($this->Settings->watermark) {
                    $this->image_lib->clear();
                    $wm['source_image'] = $this->upload_path . $photo;
                    $wm['wm_text'] = 'Copyright ' . date('Y') . ' - ' . $this->Settings->site_name;
                    $wm['wm_type'] = 'text';
                    $wm['wm_font_path'] = 'system/fonts/texb.ttf';
                    $wm['quality'] = '100';
                    $wm['wm_font_size'] = '16';
                    $wm['wm_font_color'] = '999999';
                    $wm['wm_shadow_color'] = 'CCCCCC';
                    $wm['wm_vrt_alignment'] = 'top';
                    $wm['wm_hor_alignment'] = 'right';
                    $wm['wm_padding'] = '10';
                    $this->image_lib->initialize($wm);
                    $this->image_lib->watermark();
                }
                $this->image_lib->clear();
                $config = NULL;
            }

            if ($_FILES['userfile']['name'][0] != "") {

                $config['upload_path'] = $this->upload_path;
                $config['allowed_types'] = $this->image_types;
                $config['max_size'] = $this->allowed_file_size;
                $config['max_width'] = $this->Settings->iwidth;
                $config['max_height'] = $this->Settings->iheight;
                $config['overwrite'] = FALSE;
                $config['encrypt_name'] = TRUE;
                $config['max_filename'] = 25;
                $files = $_FILES;
                $cpt = count($_FILES['userfile']['name']);
                for ($i = 0; $i < $cpt; $i++) {

                    $_FILES['userfile']['name'] = $files['userfile']['name'][$i];
                    $_FILES['userfile']['type'] = $files['userfile']['type'][$i];
                    $_FILES['userfile']['tmp_name'] = $files['userfile']['tmp_name'][$i];
                    $_FILES['userfile']['error'] = $files['userfile']['error'][$i];
                    $_FILES['userfile']['size'] = $files['userfile']['size'][$i];

                    $this->upload->initialize($config);

                    if (!$this->upload->do_upload()) {
                        $error = $this->upload->display_errors();
                        $this->session->set_flashdata('error', $error);
                        redirect("products/edit/" . $id);
                    } else {

                        $pho = $this->upload->file_name;

                        $photos[] = $pho;

                        $this->load->library('image_lib');
                        $config['image_library'] = 'gd2';
                        $config['source_image'] = $this->upload_path . $pho;
                        $config['new_image'] = $this->thumbs_path . $pho;
                        $config['maintain_ratio'] = TRUE;
                        $config['width'] = $this->Settings->twidth;
                        $config['height'] = $this->Settings->theight;

                        $this->image_lib->initialize($config);

                        if (!$this->image_lib->resize()) {
                            echo $this->image_lib->display_errors();
                        }

                        if ($this->Settings->watermark) {
                            $this->image_lib->clear();
                            $wm['source_image'] = $this->upload_path . $pho;
                            $wm['wm_text'] = 'Copyright ' . date('Y') . ' - ' . $this->Settings->site_name;
                            $wm['wm_type'] = 'text';
                            $wm['wm_font_path'] = 'system/fonts/texb.ttf';
                            $wm['quality'] = '100';
                            $wm['wm_font_size'] = '16';
                            $wm['wm_font_color'] = '999999';
                            $wm['wm_shadow_color'] = 'CCCCCC';
                            $wm['wm_vrt_alignment'] = 'top';
                            $wm['wm_hor_alignment'] = 'right';
                            $wm['wm_padding'] = '10';
                            $this->image_lib->initialize($wm);
                            $this->image_lib->watermark();
                        }

                        $this->image_lib->clear();
                    }
                }
                $config = NULL;
            } else {
                $photos = NULL;
            }
            $data['quantity'] = isset($wh_total_quantity) ? $wh_total_quantity : 0;
            // echo $this->sma->print_arrays($data, $warehouse_qty, $update_variants, $product_attributes, $photos, $items);
        }

        if ($this->form_validation->run() == true && $this->products_model->updateProduct($id, $data, $items, $warehouse_qty, $product_attributes, $photos, $update_variants)) {
            $this->session->set_flashdata('message', lang("product_updated"));
            redirect('products');
        } else {
            $this->data['error'] = (validation_errors() ? validation_errors() : $this->session->flashdata('error'));

            $this->data['categories'] = $this->site->getAllCategories();
            $this->data['tax_rates'] = $this->site->getAllTaxRates();
            $this->data['warehouses'] = $warehouses;
            $this->data['warehouses_products'] = $warehouses_products;
            $this->data['product'] = $product;
            $this->data['variants'] = $this->products_model->getAllVariants();
            $this->data['product_variants'] = $this->products_model->getProductOptions($id);
            $this->data['combo_items'] = $product->type == 'combo' ? $this->products_model->getProductComboItems($product->id) : NULL;
            $this->data['product_options'] = $id ? $this->products_model->getProductOptionsWithWH($id) : NULL;
            $bc = array(array('link' => base_url(), 'page' => lang('home')), array('link' => site_url('products'), 'page' => lang('products')), array('link' => '#', 'page' => lang('edit_product')));
            $meta = array('page_title' => lang('edit_product'), 'bc' => $bc);
            $this->page_construct('products/edit', $meta, $this->data);
        }
    }

    /* ----------------------------------------------------------------------------------------------------------------------------------------- */

    function import_csv()
    {
        $this->sma->checkPermissions('csv');
        $this->load->helper('security');
        $this->form_validation->set_rules('userfile', lang("upload_file"), 'xss_clean');

        if ($this->form_validation->run() == true) {

            if (isset($_FILES["userfile"])) {

                $this->load->library('upload');

                $config['upload_path'] = $this->digital_upload_path;
                $config['allowed_types'] = 'csv';
                $config['max_size'] = $this->allowed_file_size;
                $config['overwrite'] = TRUE;

                $this->upload->initialize($config);

                if (!$this->upload->do_upload()) {

                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect("products/import_csv");
                }

                $csv = $this->upload->file_name;

                $arrResult = array();
                $handle = fopen($this->digital_upload_path . $csv, "r");
                if ($handle) {
                    while (($row = fgetcsv($handle, 5000, ",")) !== FALSE) {
                        $arrResult[] = $row;
                    }
                    fclose($handle);
                }
                $titles = array_shift($arrResult);

                $keys = array('code', 'name', 'category_code', 'unit', 'cost', 'price', 'alert_quantity', 'tax_rate', 'tax_method', 'subcategory_code', 'variants', 'cf1', 'cf2', 'cf3', 'cf4', 'cf5', 'cf6');

                $final = array();

                foreach ($arrResult as $key => $value) {
                    $final[] = array_combine($keys, $value);
                }
                //$this->sma->print_arrays($final);
                $rw = 2;
                foreach ($final as $csv_pr) {
                    if ($this->products_model->getProductByCode(trim($csv_pr['code']))) {
                        $this->session->set_flashdata('error', lang("check_product_code") . " (" . $csv_pr['code'] . "). " . lang("code_already_exist") . " " . lang("line_no") . " " . $rw);
                        redirect("products/import_csv");
                    }
                    if ($catd = $this->products_model->getCategoryByCode(trim($csv_pr['category_code']))) {
                        $pr_code[] = trim($csv_pr['code']);
                        $pr_name[] = trim($csv_pr['name']);
                        $pr_cat[] = $catd->id;
                        $pr_variants[] = trim($csv_pr['variants']);
                        $pr_unit[] = trim($csv_pr['unit']);
                        $tax_method[] = $csv_pr['tax_method'] == 'exclusive' ? 1 : 0;
                        $prsubcat = $this->products_model->getSubcategoryByCode(trim($csv_pr['subcategory_code']));
                        $pr_subcat[] = $prsubcat ? $prsubcat->id : NULL;
                        $pr_cost[] = trim($csv_pr['cost']);
                        $pr_price[] = trim($csv_pr['price']);
                        $pr_aq[] = trim($csv_pr['alert_quantity']);
                        $tax_details = $this->products_model->getTaxRateByName(trim($csv_pr['tax_rate']));
                        $pr_tax[] = $tax_details ? $tax_details->id : NULL;
                        $cf1[] = trim($csv_pr['cf1']);
                        $cf2[] = trim($csv_pr['cf2']);
                        $cf3[] = trim($csv_pr['cf3']);
                        $cf4[] = trim($csv_pr['cf4']);
                        $cf5[] = trim($csv_pr['cf5']);
                        $cf6[] = trim($csv_pr['cf6']);
                    } else {
                        $this->session->set_flashdata('error', lang("check_category_code") . " (" . $csv_pr['category_code'] . "). " . lang("category_code_x_exist") . " " . lang("line_no") . " " . $rw);
                        redirect("products/import_csv");
                    }

                    $rw++;
                }
            }

            $ikeys = array('code', 'name', 'category_id', 'unit', 'cost', 'price', 'alert_quantity', 'tax_rate', 'tax_method', 'subcategory_id', 'variants', 'cf1', 'cf2', 'cf3', 'cf4', 'cf5', 'cf6');

            $items = array();
            foreach (array_map(null, $pr_code, $pr_name, $pr_cat, $pr_unit, $pr_cost, $pr_price, $pr_aq, $pr_tax, $tax_method, $pr_subcat, $pr_variants, $cf1, $cf2, $cf3, $cf4, $cf5, $cf6) as $ikey => $value) {
                $items[] = array_combine($ikeys, $value);
            }

            //$this->sma->print_arrays($items);
        }

        if ($this->form_validation->run() == true && $this->products_model->add_products($items)) {
            $this->session->set_flashdata('message', lang("products_added"));
            redirect('products');
        } else {

            $this->data['error'] = (validation_errors() ? validation_errors() : $this->session->flashdata('error'));

            $this->data['userfile'] = array('name' => 'userfile',
                'id' => 'userfile',
                'type' => 'text',
                'value' => $this->form_validation->set_value('userfile')
            );

            $bc = array(array('link' => base_url(), 'page' => lang('home')), array('link' => site_url('products'), 'page' => lang('products')), array('link' => '#', 'page' => lang('import_products_by_csv')));
            $meta = array('page_title' => lang('import_products_by_csv'), 'bc' => $bc);
            $this->page_construct('products/import_csv', $meta, $this->data);

        }
    }

    /* ---------------------------------------------------------------------------------------------- */

    function update_price()
    {
        $this->sma->checkPermissions('csv');
        $this->load->helper('security');
        $this->form_validation->set_rules('userfile', lang("upload_file"), 'xss_clean');

        if ($this->form_validation->run() == true) {

            if (DEMO) {
                $this->session->set_flashdata('message', lang("disabled_in_demo"));
                redirect('welcome');
            }

            if (isset($_FILES["userfile"])) {

                $this->load->library('upload');

                $config['upload_path'] = $this->digital_upload_path;
                $config['allowed_types'] = 'csv';
                $config['max_size'] = $this->allowed_file_size;
                $config['overwrite'] = TRUE;

                $this->upload->initialize($config);

                if (!$this->upload->do_upload()) {

                    $error = $this->upload->display_errors();
                    $this->session->set_flashdata('error', $error);
                    redirect("products/update_price");
                }

                $csv = $this->upload->file_name;

                $arrResult = array();
                $handle = fopen($this->digital_upload_path . $csv, "r");
                if ($handle) {
                    while (($row = fgetcsv($handle, 1000, ",")) !== FALSE) {
                        $arrResult[] = $row;
                    }
                    fclose($handle);
                }
                $titles = array_shift($arrResult);

                $keys = array('code', 'price');

                $final = array();

                foreach ($arrResult as $key => $value) {
                    $final[] = array_combine($keys, $value);
                }
                $rw = 2;
                foreach ($final as $csv_pr) {
                    if (!$this->products_model->getProductByCode(trim($csv_pr['code']))) {
                        $this->session->set_flashdata('message', lang("check_product_code") . " (" . $csv_pr['code'] . "). " . lang("code_x_exist") . " " . lang("line_no") . " " . $rw);
                        redirect("product/update_price");
                    }
                    $rw++;
                }
            }

        }

        if ($this->form_validation->run() == true && !empty($final)) {
            $this->products_model->updatePrice($final);
            $this->session->set_flashdata('message', lang("price_updated"));
            redirect('products');
        } else {

            $this->data['error'] = (validation_errors() ? validation_errors() : $this->session->flashdata('error'));

            $this->data['userfile'] = array('name' => 'userfile',
                'id' => 'userfile',
                'type' => 'text',
                'value' => $this->form_validation->set_value('userfile')
            );

            $bc = array(array('link' => base_url(), 'page' => lang('home')), array('link' => site_url('products'), 'page' => lang('products')), array('link' => '#', 'page' => lang('update_price_csv')));
            $meta = array('page_title' => lang('update_price_csv'), 'bc' => $bc);
            $this->page_construct('products/update_price', $meta, $this->data);

        }
    }

    /* ------------------------------------------------------------------------------- */

    function delete($id = NULL)
    {
        $this->sma->checkPermissions(NULL, TRUE);

        if ($this->input->get('id')) {
            $id = $this->input->get('id');
        }

        if ($this->products_model->deleteProduct($id)) {
            if($this->input->is_ajax_request()) {
                echo lang("product_deleted"); die();
            }
            $this->session->set_flashdata('message', lang('product_deleted'));
            redirect('welcome');
        }

    }

    /* ----------------------------------------------------------------------------- */

    function quantity_adjustments()
    {
        $this->sma->checkPermissions();

        $data['error'] = (validation_errors()) ? validation_errors() : $this->session->flashdata('error');

        $data['warehouses'] = $this->site->getAllWarehouses();

        $bc = array(array('link' => base_url(), 'page' => lang('home')), array('link' => site_url('products'), 'page' => lang('products')), array('link' => '#', 'page' => lang('quantity_adjustments')));
        $meta = array('page_title' => lang('quantity_adjustments'), 'bc' => $bc);
        $this->page_construct('products/quantity_adjustments', $meta, $this->data);
    }

    function getadjustments($pdf = NULL, $xls = NULL)
    {
        $this->sma->checkPermissions('quantity_adjustments');

        $product = $this->input->get('product') ? $this->input->get('product') : NULL;

        if ($pdf || $xls) {

            $this->db
                ->select($this->db->dbprefix('adjustments') . ".id as did, " . $this->db->dbprefix('adjustments') . ".product_id as productid, " . $this->db->dbprefix('adjustments') . ".date as date, " . $this->db->dbprefix('products') . ".image as image, " . $this->db->dbprefix('products') . ".code as code, " . $this->db->dbprefix('products') . ".name as pname, " . $this->db->dbprefix('product_variants') . ".name as vname, " . $this->db->dbprefix('adjustments') . ".quantity as quantity, ".$this->db->dbprefix('adjustments') . ".type, " . $this->db->dbprefix('warehouses') . ".name as wh");
            $this->db->from('adjustments');
            $this->db->join('products', 'products.id=adjustments.product_id', 'left');
            $this->db->join('product_variants', 'product_variants.id=adjustments.option_id', 'left');
            $this->db->join('warehouses', 'warehouses.id=adjustments.warehouse_id', 'left');
            $this->db->group_by("adjustments.id")->order_by('adjustments.date desc');
            if ($product) {
                $this->db->where('adjustments.product_id', $product);
            }

            $q = $this->db->get();
            if ($q->num_rows() > 0) {
                foreach (($q->result()) as $row) {
                    $data[] = $row;
                }
            } else {
                $data = NULL;
            }

            if (!empty($data)) {

                $this->load->library('excel');
                $this->excel->setActiveSheetIndex(0);
                $this->excel->getActiveSheet()->setTitle(lang('quantity_adjustments'));
                $this->excel->getActiveSheet()->SetCellValue('A1', lang('date'));
                $this->excel->getActiveSheet()->SetCellValue('B1', lang('product_code'));
                $this->excel->getActiveSheet()->SetCellValue('C1', lang('product_name'));
                $this->excel->getActiveSheet()->SetCellValue('D1', lang('product_variant'));
                $this->excel->getActiveSheet()->SetCellValue('E1', lang('quantity'));
                $this->excel->getActiveSheet()->SetCellValue('F1', lang('type'));
                $this->excel->getActiveSheet()->SetCellValue('G1', lang('warehouse'));

                $row = 2;
                foreach ($data as $data_row) {
                    $this->excel->getActiveSheet()->SetCellValue('A' . $row, $this->sma->hrld($data_row->date));
                    $this->excel->getActiveSheet()->SetCellValue('B' . $row, $data_row->code);
                    $this->excel->getActiveSheet()->SetCellValue('C' . $row, $data_row->pname);
                    $this->excel->getActiveSheet()->SetCellValue('D' . $row, $data_row->vname);
                    $this->excel->getActiveSheet()->SetCellValue('E' . $row, $data_row->quantity);
                    $this->excel->getActiveSheet()->SetCellValue('F' . $row, lang($data_row->type));
                    $this->excel->getActiveSheet()->SetCellValue('G' . $row, $data_row->wh);
                    $row++;
                }

                $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
                $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(20);
                $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(20);
                $this->excel->getActiveSheet()->getColumnDimension('D')->setWidth(20);
                $this->excel->getActiveSheet()->getColumnDimension('E')->setWidth(20);
                $this->excel->getActiveSheet()->getColumnDimension('F')->setWidth(20);
                $this->excel->getActiveSheet()->getColumnDimension('G')->setWidth(20);
                $filename = lang('quantity_adjustments');
                $this->excel->getDefaultStyle()->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
                if ($pdf) {
                    $styleArray = array(
                        'borders' => array(
                            'allborders' => array(
                                'style' => PHPExcel_Style_Border::BORDER_THIN
                            )
                        )
                    );
                    $this->excel->getDefaultStyle()->applyFromArray($styleArray);
                    $this->excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
                    require_once(APPPATH . "third_party" . DIRECTORY_SEPARATOR . "MPDF" . DIRECTORY_SEPARATOR . "mpdf.php");
                    $rendererName = PHPExcel_Settings::PDF_RENDERER_MPDF;
                    $rendererLibrary = 'MPDF';
                    $rendererLibraryPath = APPPATH . 'third_party' . DIRECTORY_SEPARATOR . $rendererLibrary;
                    if (!PHPExcel_Settings::setPdfRenderer($rendererName, $rendererLibraryPath)) {
                        die('Please set the $rendererName: ' . $rendererName . ' and $rendererLibraryPath: ' . $rendererLibraryPath . ' values' .
                            PHP_EOL . ' as appropriate for your directory structure');
                    }

                    header('Content-Type: application/pdf');
                    header('Content-Disposition: attachment;filename="' . $filename . '.pdf"');
                    header('Cache-Control: max-age=0');

                    $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'PDF');
                    $objWriter->save('php://output');
                    exit();
                }
                if ($xls) {
                    ob_clean();
                    header('Content-Type: application/vnd.ms-excel');
                    header('Content-Disposition: attachment;filename="' . $filename . '.xls"');
                    header('Cache-Control: max-age=0');
                    ob_clean();
                    $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
                    $objWriter->save('php://output');
                    exit();
                }

            }

            $this->session->set_flashdata('error', lang('nothing_found'));
            redirect($_SERVER["HTTP_REFERER"]);

        } else {

            $delete_link = "<a href='#' class='tip po' title='<b>" . $this->lang->line("delete_adjustment") . "</b>' data-content=\"<p>"
                . lang('r_u_sure') . "</p><a class='btn btn-danger po-delete' id='a__$1' href='" . site_url('products/delete_adjustment/$2') . "'>"
                . lang('i_m_sure') . "</a> <button class='btn po-close'>" . lang('no') . "</button>\"  rel='popover'><i class=\"fa fa-trash-o\"></i></a>";

            $this->load->library('datatables');
            $this->datatables
                ->select($this->db->dbprefix('adjustments') . ".id as did, " . $this->db->dbprefix('adjustments') . ".product_id as productid, " . $this->db->dbprefix('adjustments') . ".date as date, " . $this->db->dbprefix('products') . ".image as image, " . $this->db->dbprefix('products') . ".code as code, " . $this->db->dbprefix('products') . ".name as pname, " . $this->db->dbprefix('product_variants') . ".name as vname, " . $this->db->dbprefix('adjustments') . ".quantity as quantity, ".$this->db->dbprefix('adjustments') . ".type, " . $this->db->dbprefix('warehouses') . ".name as wh");
            $this->datatables->from('adjustments');
            $this->datatables->join('products', 'products.id=adjustments.product_id', 'left');
            $this->datatables->join('product_variants', 'product_variants.id=adjustments.option_id', 'left');
            $this->datatables->join('warehouses', 'warehouses.id=adjustments.warehouse_id', 'left');
            $this->datatables->group_by("adjustments.id");
            $this->datatables->add_column("Actions", "<div class='text-center'><a href='" . site_url('products/edit_adjustment/$1/$2') . "' class='tip' title='" . lang("edit_adjustment") . "' data-toggle='modal' data-target='#myModal'><i class='fa fa-edit'></i></a> " . $delete_link . "</div>", "productid, did");
            if ($product) {
                $this->datatables->where('adjustments.product_id', $product);
            }
            $this->datatables->unset_column('did');
            $this->datatables->unset_column('productid');
            $this->datatables->unset_column('image');

            echo $this->datatables->generate();

        }

    }

    function add_adjustment($product_id = NULL, $warehouse_id = NULL)
    {
        $this->sma->checkPermissions(false, true);

        $this->form_validation->set_rules('type', lang("type"), 'required');
        $this->form_validation->set_rules('quantity', lang("quantity"), 'required');
        $this->form_validation->set_rules('warehouse', lang("warehouse"), 'required');

        if ($this->form_validation->run() == true) {

            if ( ! $this->products_model->has_purchase($product_id, $this->input->post('warehouse'))) {
                $this->session->set_flashdata('error', lang("quantity_x_adjusted"));
                redirect($_SERVER["HTTP_REFERER"]);
            }

            if ($this->Owner || $this->Admin) {
                $date = $this->sma->fld($this->input->post('date'));
            } else {
                $date = date('Y-m-d H:s:i');
            }
            $data = array(
                'date' => $date,
                'product_id' => $product_id,
                'type' => $this->input->post('type'),
                'quantity' => $this->input->post('quantity'),
                'warehouse_id' => $this->input->post('warehouse'),
                'option_id' => $this->input->post('option'),
                'note' => $this->sma->clear_tags($this->input->post('note')),
                'created_by' => $this->session->userdata('user_id')
                );

            if (!$this->Settings->overselling && $this->input->post('type') == 'subtraction') {
                if ($this->input->post('option')) {
                    if($op_wh_qty = $this->products_model->getProductWarehouseOptionQty($this->input->post('option'), $this->input->post('warehouse'))) {
                        if ($op_wh_qty->quantity < $data['quantity']) {
                            $this->session->set_flashdata('error', lang('warehouse_option_qty_is_less_than_damage'));
                            redirect($_SERVER["HTTP_REFERER"]);
                        }
                    } else {
                        $this->session->set_flashdata('error', lang('warehouse_option_qty_is_less_than_damage'));
                        redirect($_SERVER["HTTP_REFERER"]);
                    }
                }
                if($wh_qty = $this->products_model->getProductQuantity($product_id, $this->input->post('warehouse'))) {
                    if ($wh_qty['quantity'] < $data['quantity']) {
                        $this->session->set_flashdata('error', lang('warehouse_qty_is_less_than_damage'));
                        redirect($_SERVER["HTTP_REFERER"]);
                    }
                } else {
                    $this->session->set_flashdata('error', lang('warehouse_qty_is_less_than_damage'));
                    redirect($_SERVER["HTTP_REFERER"]);
                }
            }

        } elseif ($this->input->post('adjust_quantity')) {
            $this->session->set_flashdata('error', validation_errors());
            redirect('products');
        }

        if ($this->form_validation->run() == true && $this->products_model->addAdjustment($data)) {
            $this->session->set_flashdata('message', lang("quantity_adjusted"));
            redirect('products/quantity_adjustments');
        } else {
            $this->data['error'] = (validation_errors() ? validation_errors() : $this->session->flashdata('error'));
            $product = $this->site->getProductByID($product_id);
            if($product->type != 'standard') {
                $this->session->set_flashdata('error', lang('quantity_x_adjuste').' ('.lang('product_type').': '.lang($product->type).')');
                die('<script>window.location.replace("'.$_SERVER["HTTP_REFERER"].'");</script>');
            }
            $this->data['product'] = $product;
            $this->data['warehouses'] = $this->site->getAllWarehouses();
            $this->data['modal_js'] = $this->site->modal_js();
            $this->data['options'] = $this->products_model->getProductOptionsWithWH($product_id);
            $this->data['product_id'] = $product_id;
            $this->data['warehouse_id'] = $warehouse_id;
            $this->load->view($this->theme . 'products/add_adjustment', $this->data);

        }
    }

    function edit_adjustment($product_id = NULL, $id = NULL)
    {
        $this->sma->checkPermissions(false, true);

        if ($this->input->get('id')) {
            $id = $this->input->get('id');
        }
        if ($this->input->get('product_id')) {
            $product_id = $this->input->get('product_id');
        }
        $this->form_validation->set_rules('type', lang("type"), 'required');
        $this->form_validation->set_rules('quantity', lang("quantity"), 'required');
        $this->form_validation->set_rules('warehouse', lang("warehouse"), 'required');

        if ($this->form_validation->run() == true) {

            if ($this->Owner || $this->Admin) {
                $date = $this->sma->fld($this->input->post('date'));
            } else {
                $date = NULL;
            }

            $data = array(
                'product_id' => $product_id,
                'type' => $this->input->post('type'),
                'quantity' => $this->input->post('quantity'),
                'warehouse_id' => $this->input->post('warehouse'),
                'option_id' => $this->input->post('option'),
                'note' => $this->sma->clear_tags($this->input->post('note')),
                'updated_by' => $this->session->userdata('user_id')
                );
            if ($date) {
                $data['date'] = $date;
            }

            if (!$this->Settings->overselling && $this->input->post('type') == 'subtraction') {
                $dp_details = $this->products_model->getAdjustmentByID($id);
                if ($this->input->post('option')) {
                    $op_wh_qty = $this->products_model->getProductWarehouseOptionQty($this->input->post('option'), $this->input->post('warehouse'));
                    $old_op_qty = $op_wh_qty->quantity + $dp_details->quantity;
                    if ($old_op_qty < $data['quantity']) {
                        $this->session->set_flashdata('error', lang('warehouse_option_qty_is_less_than_damage'));
                        redirect('products');
                    }
                }
                $wh_qty = $this->products_model->getProductQuantity($product_id, $this->input->post('warehouse'));
                $old_quantity = $wh_qty['quantity'] + $dp_details->quantity;
                if ($old_quantity < $data['quantity']) {
                    $this->session->set_flashdata('error', lang('warehouse_qty_is_less_than_damage'));
                    redirect('products/quantity_adjustments');
                }
            }

        } elseif ($this->input->post('edit_adjustment')) {
            $this->session->set_flashdata('error', validation_errors());
            redirect('products/quantity_adjustments');
        }

        if ($this->form_validation->run() == true && $this->products_model->updateAdjustment($id, $data)) {
            $this->session->set_flashdata('message', lang("quantity_adjusted"));
            redirect('products/quantity_adjustments');
        } else {
            $this->data['error'] = (validation_errors() ? validation_errors() : $this->session->flashdata('error'));

            $this->data['product'] = $this->site->getProductByID($product_id);
            $this->data['options'] = $this->products_model->getProductOptionsWithWH($product_id);
            $this->data['damage'] = $this->products_model->getAdjustmentByID($id);
            $this->data['warehouses'] = $this->site->getAllWarehouses();
            $this->data['id'] = $id;
            $this->data['product_id'] = $product_id;
            $this->data['modal_js'] = $this->site->modal_js();
            $this->load->view($this->theme . 'products/edit_adjustment', $this->data);
        }
    }

    function delete_adjustment($id = NULL)
    {
        $this->sma->checkPermissions(NULL, TRUE);

        if ($this->products_model->deleteAdjustment($id)) {
            echo lang("adjustment_deleted");
        }

    }

    /* --------------------------------------------------------------------------------------------- */

    function modal_view($id = NULL)
    {
        $this->sma->checkPermissions('index', TRUE);

        $pr_details = $this->site->getProductByID($id);
        if (!$id || !$pr_details) {
            $this->session->set_flashdata('error', lang('prduct_not_found'));
            redirect($_SERVER["HTTP_REFERER"]);
        }
        $this->data['barcode'] = "<img src='" . site_url('products/gen_barcode/' . $pr_details->code . '/' . $pr_details->barcode_symbology . '/40/0') . "' alt='" . $pr_details->code . "' class='pull-left' />";
        if ($pr_details->type == 'combo') {
            $this->data['combo_items'] = $this->products_model->getProductComboItems($id);
        }
        $this->data['product'] = $pr_details;
        $this->data['images'] = $this->products_model->getProductPhotos($id);
        $this->data['category'] = $this->site->getCategoryByID($pr_details->category_id);
        $this->data['subcategory'] = $pr_details->subcategory_id ? $this->products_model->getSubCategoryByID($pr_details->subcategory_id) : NULL;
        $this->data['tax_rate'] = $pr_details->tax_rate ? $this->site->getTaxRateByID($pr_details->tax_rate) : NULL;
        $this->data['warehouses'] = $this->products_model->getAllWarehousesWithPQ($id);
        $this->data['options'] = $this->products_model->getProductOptionsWithWH($id);
        $this->data['variants'] = $this->products_model->getProductOptions($id);

        $this->load->view($this->theme.'products/modal_view', $this->data);
    }

    function view($id = NULL)
    {
        $this->sma->checkPermissions('index');

        $pr_details = $this->products_model->getProductByID($id);
        if (!$id || !$pr_details) {
            $this->session->set_flashdata('error', lang('prduct_not_found'));
            redirect($_SERVER["HTTP_REFERER"]);
        }
        $this->data['barcode'] = "<img src='" . site_url('products/gen_barcode/' . $pr_details->code . '/' . $pr_details->barcode_symbology . '/40/0') . "' alt='" . $pr_details->code . "' class='pull-left' />";
        if ($pr_details->type == 'combo') {
            $this->data['combo_items'] = $this->products_model->getProductComboItems($id);
        }
        $this->data['product'] = $pr_details;
        $this->data['images'] = $this->products_model->getProductPhotos($id);
        $this->data['category'] = $this->site->getCategoryByID($pr_details->category_id);
        $this->data['subcategory'] = $pr_details->subcategory_id ? $this->products_model->getSubCategoryByID($pr_details->subcategory_id) : NULL;
        $this->data['tax_rate'] = $pr_details->tax_rate ? $this->site->getTaxRateByID($pr_details->tax_rate) : NULL;
        $this->data['popup_attributes'] = $this->popup_attributes;
        $this->data['warehouses'] = $this->products_model->getAllWarehousesWithPQ($id);
        $this->data['options'] = $this->products_model->getProductOptionsWithWH($id);
        $this->data['variants'] = $this->products_model->getProductOptions($id);
        $this->data['sold'] = $this->products_model->getSoldQty($id);
        $this->data['purchased'] = $this->products_model->getPurchasedQty($id);

        $bc = array(array('link' => base_url(), 'page' => lang('home')), array('link' => site_url('products'), 'page' => lang('products')), array('link' => '#', 'page' => $pr_details->name));
        $meta = array('page_title' => $pr_details->name, 'bc' => $bc);
        $this->page_construct('products/view', $meta, $this->data);
    }

    function pdf($id = NULL, $view = NULL)
    {
        $this->sma->checkPermissions('index');

        $pr_details = $this->products_model->getProductByID($id);
        if (!$id || !$pr_details) {
            $this->session->set_flashdata('error', lang('prduct_not_found'));
            redirect($_SERVER["HTTP_REFERER"]);
        }
        $this->data['barcode'] = "<img src='" . site_url('products/gen_barcode/' . $pr_details->code . '/' . $pr_details->barcode_symbology . '/40/0') . "' alt='" . $pr_details->code . "' class='pull-left' />";
        if ($pr_details->type == 'combo') {
            $this->data['combo_items'] = $this->products_model->getProductComboItems($id);
        }
        $this->data['product'] = $pr_details;
        $this->data['images'] = $this->products_model->getProductPhotos($id);
        $this->data['category'] = $this->site->getCategoryByID($pr_details->category_id);
        $this->data['subcategory'] = $pr_details->subcategory_id ? $this->products_model->getSubCategoryByID($pr_details->subcategory_id) : NULL;
        $this->data['tax_rate'] = $pr_details->tax_rate ? $this->site->getTaxRateByID($pr_details->tax_rate) : NULL;
        $this->data['popup_attributes'] = $this->popup_attributes;
        $this->data['warehouses'] = $this->products_model->getAllWarehousesWithPQ($id);
        $this->data['options'] = $this->products_model->getProductOptionsWithWH($id);
        $this->data['variants'] = $this->products_model->getProductOptions($id);

        $name = $pr_details->code . '_' . str_replace('/', '_', $pr_details->name) . ".pdf";
        if ($view) {
            $this->load->view($this->theme . 'products/pdf', $this->data);
        } else {
            $html = $this->load->view($this->theme . 'products/pdf', $this->data, TRUE);
            $this->sma->generate_pdf($html, $name);
        }
    }

    function getSubCategories($category_id = NULL)
    {
        if ($rows = $this->products_model->getSubCategoriesForCategoryID($category_id)) {
            $data = json_encode($rows);
        } else {
            $data = false;
        }
        echo $data;
    }

    function product_actions()
    {
        if (!$this->Owner) {
            $this->session->set_flashdata('warning', lang('access_denied'));
            redirect($_SERVER["HTTP_REFERER"]);
        }

        $this->form_validation->set_rules('form_action', lang("form_action"), 'required');

        if ($this->form_validation->run() == true) {

            if (!empty($_POST['val'])) {
                if ($this->input->post('form_action') == 'sync_quantity') {
                    foreach ($_POST['val'] as $id) {
                        $this->site->syncQuantity(NULL, NULL, NULL, $id);
                    }
                    $this->session->set_flashdata('message', $this->lang->line("products_quantity_sync"));
                    redirect($_SERVER["HTTP_REFERER"]);
                }

                if ($this->input->post('form_action') == 'delete') {
                    foreach ($_POST['val'] as $id) {
                        $this->products_model->deleteProduct($id);
                    }
                    $this->session->set_flashdata('message', $this->lang->line("products_deleted"));
                    redirect($_SERVER["HTTP_REFERER"]);
                }

                if ($this->input->post('form_action') == 'labels') {
                    $currencies = $this->site->getAllCurrencies();
                    $r = 1;
                    $inputs = '';
                    $html = "";
                    $html .= '<table class="table table-bordered table-condensed bartable"><tbody><tr>';
                    foreach ($_POST['val'] as $id) {
                        $inputs .= form_hidden('val[]', $id);
                        $pr = $this->products_model->getProductByID($id);

                        $html .= '<td class="text-center"><h4>' . $this->Settings->site_name . '</h4>' . $pr->name . '<br>' . $this->product_barcode($pr->code, $pr->barcode_symbology, 30);
                        $html .= '<table class="table table-bordered">';
                        foreach ($currencies as $currency) {
                            $html .= '<tr><td class="text-left">' . $currency->code . '</td><td class="text-right">' . $this->sma->formatMoney($pr->price * $currency->rate) . '</td></tr>';
                        }
                        $html .= '</table>';
                        $html .= '</td>';

                        if ($r % 4 == 0) {
                            $html .= '</tr><tr>';
                        }
                        $r++;
                    }
                    if ($r < 4) {
                        for ($i = $r; $i <= 4; $i++) {
                            $html .= '<td></td>';
                        }
                    }
                    $html .= '</tr></tbody></table>';

                    $this->data['r'] = $r;
                    $this->data['html'] = $html;
                    $this->data['inputs'] = $inputs;
                    $this->data['page_title'] = lang("print_labels");
                    $this->data['categories'] = $this->site->getAllCategories();
                    $this->data['category_id'] = '';
                    //$this->load->view($this->theme . 'products/print_labels', $this->data);
                    $bc = array(array('link' => base_url(), 'page' => lang('home')), array('link' => site_url('products'), 'page' => lang('products')), array('link' => '#', 'page' => lang('print_labels')));
                    $meta = array('page_title' => lang('print_labels'), 'bc' => $bc);
                    $this->page_construct('products/print_labels', $meta, $this->data);
                }

                if ($this->input->post('form_action') == 'barcodes') {
                    $currencies = $this->site->getAllCurrencies();
                    $r = 1;

                    $html = "";
                    $html .= '<table class="table table-bordered sheettable"><tbody><tr>';
                    foreach ($_POST['val'] as $id) {
                        $pr = $this->site->getProductByID($id);
                        if ($r != 1) {
                            $rw = (bool)($r & 1);
                            $html .= $rw ? '</tr><tr>' : '';
                        }
                        $html .= '<td colspan="2" class="text-center"><h3>' . $this->Settings->site_name . '</h3>' . $pr->name . '<br>' . $this->product_barcode($pr->code, $pr->barcode_symbology, 60);
                        $html .= '<table class="table table-bordered">';
                        foreach ($currencies as $currency) {
                            $html .= '<tr><td class="text-left">' . $currency->code . '</td><td class="text-right">' . $this->sma->formatMoney($pr->price * $currency->rate) . '</td></tr>';
                        }
                        $html .= '</table>';
                        $html .= '</td>';
                        $r++;
                    }
                    if (!(bool)($r & 1)) {
                        $html .= '<td></td>';
                    }
                    $html .= '</tr></tbody></table>';

                    $this->data['r'] = $r;
                    $this->data['html'] = $html;
                    $this->data['category_id'] = '';
                    $this->data['categories'] = $this->site->getAllCategories();
                    $bc = array(array('link' => base_url(), 'page' => lang('home')), array('link' => site_url('products'), 'page' => lang('products')), array('link' => '#', 'page' => lang('print_barcodes')));
                    $meta = array('page_title' => lang('print_barcodes'), 'bc' => $bc);
                    $this->page_construct('products/print_barcodes', $meta, $this->data);
                    //$this->load->view($this->theme . 'products/print_barcodes', $this->data);
                }
                if ($this->input->post('form_action') == 'export_excel' || $this->input->post('form_action') == 'export_pdf') {

                    $this->load->library('excel');
                    $this->excel->setActiveSheetIndex(0);
                    $this->excel->getActiveSheet()->setTitle('Products');
                    $this->excel->getActiveSheet()->SetCellValue('A1', lang('product_code'));
                    $this->excel->getActiveSheet()->SetCellValue('B1', lang('product_name'));
                    $this->excel->getActiveSheet()->SetCellValue('C1', lang('category_code'));
                    $this->excel->getActiveSheet()->SetCellValue('D1', lang('unit'));
                    $this->excel->getActiveSheet()->SetCellValue('E1', lang('cost'));
                    $this->excel->getActiveSheet()->SetCellValue('F1', lang('price'));
                    $this->excel->getActiveSheet()->SetCellValue('G1', lang('alert_quantity'));
                    $this->excel->getActiveSheet()->SetCellValue('H1', lang('tax_rate'));
                    $this->excel->getActiveSheet()->SetCellValue('I1', lang('tax_method'));
                    $this->excel->getActiveSheet()->SetCellValue('J1', lang('subcategory_code'));
                    $this->excel->getActiveSheet()->SetCellValue('K1', lang('product_variants'));
                    $this->excel->getActiveSheet()->SetCellValue('L1', lang('pcf1'));
                    $this->excel->getActiveSheet()->SetCellValue('M1', lang('pcf2'));
                    $this->excel->getActiveSheet()->SetCellValue('N1', lang('pcf3'));
                    $this->excel->getActiveSheet()->SetCellValue('O1', lang('pcf4'));
                    $this->excel->getActiveSheet()->SetCellValue('P1', lang('pcf5'));
                    $this->excel->getActiveSheet()->SetCellValue('Q1', lang('pcf6'));

                    $row = 2;
                    foreach ($_POST['val'] as $id) {
                        $product = $this->products_model->getProductDetail($id);
                        $variants = $this->products_model->getProductOptions($id);
                        $product_variants = '';
                        foreach ($variants as $variant) {
                            $product_variants .= trim($variant->name) . '|';
                        }
                        $this->excel->getActiveSheet()->SetCellValue('A' . $row, $product->code);
                        $this->excel->getActiveSheet()->SetCellValue('B' . $row, $product->name);
                        $this->excel->getActiveSheet()->SetCellValue('C' . $row, $product->category_code);
                        $this->excel->getActiveSheet()->SetCellValue('D' . $row, $product->unit);
                        $this->excel->getActiveSheet()->SetCellValue('E' . $row, $product->cost);
                        $this->excel->getActiveSheet()->SetCellValue('F' . $row, $product->price);
                        $this->excel->getActiveSheet()->SetCellValue('G' . $row, $product->alert_quantity);
                        $this->excel->getActiveSheet()->SetCellValue('H' . $row, $product->tax_rate_code);
                        $this->excel->getActiveSheet()->SetCellValue('I' . $row, $product->tax_method ? lang('exclusive') : lang('inclusive'));
                        $this->excel->getActiveSheet()->SetCellValue('J' . $row, $product->subcategory_code);
                        $this->excel->getActiveSheet()->SetCellValue('K' . $row, $product_variants);
                        $this->excel->getActiveSheet()->SetCellValue('L' . $row, $product->cf1);
                        $this->excel->getActiveSheet()->SetCellValue('M' . $row, $product->cf2);
                        $this->excel->getActiveSheet()->SetCellValue('N' . $row, $product->cf3);
                        $this->excel->getActiveSheet()->SetCellValue('O' . $row, $product->cf4);
                        $this->excel->getActiveSheet()->SetCellValue('P' . $row, $product->cf5);
                        $this->excel->getActiveSheet()->SetCellValue('Q' . $row, $product->cf6);
                        $row++;
                    }

                    $this->excel->getActiveSheet()->getColumnDimension('A')->setWidth(20);
                    $this->excel->getActiveSheet()->getColumnDimension('B')->setWidth(30);
                    $this->excel->getActiveSheet()->getColumnDimension('C')->setWidth(15);
                    $this->excel->getDefaultStyle()->getAlignment()->setVertical(PHPExcel_Style_Alignment::VERTICAL_CENTER);
                    $filename = 'products_' . date('Y_m_d_H_i_s');
                    if ($this->input->post('form_action') == 'export_pdf') {
                        $styleArray = array('borders' => array('allborders' => array('style' => PHPExcel_Style_Border::BORDER_THIN)));
                        $this->excel->getDefaultStyle()->applyFromArray($styleArray);
                        $this->excel->getActiveSheet()->getPageSetup()->setOrientation(PHPExcel_Worksheet_PageSetup::ORIENTATION_LANDSCAPE);
                        require_once(APPPATH . "third_party" . DIRECTORY_SEPARATOR . "MPDF" . DIRECTORY_SEPARATOR . "mpdf.php");
                        $rendererName = PHPExcel_Settings::PDF_RENDERER_MPDF;
                        $rendererLibrary = 'MPDF';
                        $rendererLibraryPath = APPPATH . 'third_party' . DIRECTORY_SEPARATOR . $rendererLibrary;
                        if (!PHPExcel_Settings::setPdfRenderer($rendererName, $rendererLibraryPath)) {
                            die('Please set the $rendererName: ' . $rendererName . ' and $rendererLibraryPath: ' . $rendererLibraryPath . ' values' .
                                PHP_EOL . ' as appropriate for your directory structure');
                        }

                        header('Content-Type: application/pdf');
                        header('Content-Disposition: attachment;filename="' . $filename . '.pdf"');
                        header('Cache-Control: max-age=0');

                        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'PDF');
                        return $objWriter->save('php://output');
                    }
                    if ($this->input->post('form_action') == 'export_excel') {
                        header('Content-Type: application/vnd.ms-excel');
                        header('Content-Disposition: attachment;filename="' . $filename . '.xls"');
                        header('Cache-Control: max-age=0');

                        $objWriter = PHPExcel_IOFactory::createWriter($this->excel, 'Excel5');
                        return $objWriter->save('php://output');
                    }

                    redirect($_SERVER["HTTP_REFERER"]);
                }
            } else {
                $this->session->set_flashdata('error', $this->lang->line("no_product_selected"));
                redirect($_SERVER["HTTP_REFERER"]);
            }
        } else {
            $this->session->set_flashdata('error', validation_errors());
            redirect($_SERVER["HTTP_REFERER"]);
        }
    }


}
