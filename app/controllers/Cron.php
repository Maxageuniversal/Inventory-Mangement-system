<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Cron extends CI_Controller
{

    function __construct() {
        parent::__construct();
        $this->load->model('cron_model');
        $this->Settings = $this->cron_model->getSettings();
    }

    function index() {
        show_404();
    }

    function run() {
        if ($m = $this->cron_model->run_cron()) {
            echo '<!doctype html><html><head><title>Cron Job</title><style>p{background:#F5F5F5;border:1px solid #EEE; padding:15px;}</style></head><body>';
            echo '<p>Corn job successfully run.</p>' . $m;
            echo '</body></html>';
        }
    }

}
