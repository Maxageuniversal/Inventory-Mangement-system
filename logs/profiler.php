<?php if($_SERVER['REMOTE_ADDR'] != '127.0.0.1') exit; ?>
                <div id="codeigniter_profiler" style="clear:both;background-color:#fff;padding:10px;">

<fieldset id="ci_profiler_benchmarks" style="border:1px solid #900;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#900;">&nbsp;&nbsp;BENCHMARKS&nbsp;&nbsp;</legend>


<table style="width:100%;">
<tr><td style="padding:5px;width:50%;color:#000;font-weight:bold;background-color:#ddd;">Loading Time: Base Classes&nbsp;&nbsp;</td><td style="padding:5px;width:50%;color:#900;font-weight:normal;background-color:#ddd;">0.0220</td></tr>
<tr><td style="padding:5px;width:50%;color:#000;font-weight:bold;background-color:#ddd;">Controller Execution Time ( Purchases / Add )&nbsp;&nbsp;</td><td style="padding:5px;width:50%;color:#900;font-weight:normal;background-color:#ddd;">0.1180</td></tr>
<tr><td style="padding:5px;width:50%;color:#000;font-weight:bold;background-color:#ddd;">Total Execution Time&nbsp;&nbsp;</td><td style="padding:5px;width:50%;color:#900;font-weight:normal;background-color:#ddd;">0.1460</td></tr>
</table>
</fieldset>

<fieldset id="ci_profiler_get" style="border:1px solid #cd6e00;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#cd6e00;">&nbsp;&nbsp;GET DATA&nbsp;&nbsp;</legend>
<div style="color:#cd6e00;font-weight:normal;padding:4px 0 4px 0;">No GET data exists</div></fieldset>

<fieldset id="ci_profiler_memory_usage" style="border:1px solid #5a0099;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#5a0099;">&nbsp;&nbsp;MEMORY USAGE&nbsp;&nbsp;</legend>
<div style="color:#5a0099;font-weight:normal;padding:4px 0 4px 0;">3,496 kb<br>3,648 kb (peak)</div></fieldset>

<fieldset id="ci_profiler_post" style="border:1px solid #009900;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#009900;">&nbsp;&nbsp;POST DATA&nbsp;&nbsp;</legend>
<div style="color:#009900;font-weight:normal;padding:4px 0 4px 0;">No POST data exists</div></fieldset>

<fieldset id="ci_profiler_uri_string" style="border:1px solid #000;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#000;">&nbsp;&nbsp;URI STRING&nbsp;&nbsp;</legend>
<div style="color:#000;font-weight:normal;padding:4px 0 4px 0;">purchases/add</div></fieldset>

<fieldset id="ci_profiler_controller_info" style="border:1px solid #995300;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#995300;">&nbsp;&nbsp;CLASS/METHOD&nbsp;&nbsp;</legend>
<div style="color:#995300;font-weight:normal;padding:4px 0 4px 0;">purchases/add</div></fieldset>

<fieldset style="border:1px solid #0000FF;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#0000FF;">&nbsp;&nbsp;DATABASE:&nbsp; sma (Purchases:$db)&nbsp;&nbsp;&nbsp;QUERIES: 12 (0.0220 seconds)&nbsp;&nbsp;(<span style="cursor: pointer;" onclick="var s=document.getElementById('ci_profiler_queries_db_0').style;s.display=s.display=='none'?'':'none';this.innerHTML=this.innerHTML=='Hide'?'Show':'Hide';">Hide</span>)</legend>


<table style="width:100%;" id="ci_profiler_queries_db_0">
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">sessions</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">session_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'622eee97bd5495ee1a3c3d6277d60f5f'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">ip_address</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'127.0.0.1'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">user_agent</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'Mozilla/5.0&nbsp;<strong>(</strong>Windows&nbsp;NT&nbsp;6.1;&nbsp;rv:32.0<strong>)</strong>&nbsp;Gecko/20100101&nbsp;Firefox/32.0'<br />&nbsp;</span><span style="color: #0000BB"><strong>LIMIT</strong>&nbsp;1&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0020&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">settings</span><span style="color: #007700">`&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0020&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">users_groups</span><span style="color: #007700">`.`</span><span style="color: #DD0000">group_id</span><span style="color: #007700">`&nbsp;as&nbsp;`</span><span style="color: #DD0000">id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">groups</span><span style="color: #007700">`.`</span><span style="color: #DD0000">name</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">groups</span><span style="color: #007700">`.`</span><span style="color: #DD0000">description</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">users_groups</span><span style="color: #007700">`<br /></span><span style="color: #0000BB">JO<strong>IN</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">groups</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>ON</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">users_groups</span><span style="color: #007700">`.`</span><span style="color: #DD0000">group_id</span><span style="color: #007700">`=`</span><span style="color: #DD0000">groups</span><span style="color: #007700">`.`</span><span style="color: #DD0000">id</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">users_groups</span><span style="color: #007700">`.`</span><span style="color: #DD0000">user_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'1'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0020&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">date_format</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'5'<br />&nbsp;</span><span style="color: #0000BB"><strong>LIMIT</strong>&nbsp;1&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0050&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">companies</span><span style="color: #007700">`<br />&nbsp;</span><span style="color: #0000BB"><strong>LIMIT</strong>&nbsp;1&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0040&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">currencies</span><span style="color: #007700">`&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">categories</span><span style="color: #007700">`&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">tax_rates</span><span style="color: #007700">`&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">warehouses</span><span style="color: #007700">`&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;<strong>MAX</strong></span><span style="color: #007700"><strong>(</strong>`</span><span style="color: #DD0000">id</span><span style="color: #007700">`<strong>)</strong>&nbsp;<strong>AS</strong>&nbsp;`</span><span style="color: #DD0000">id</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">purchases</span><span style="color: #007700">`&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0030&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">notifications</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">from_date</span><span style="color: #007700">`&nbsp;&lt;=&nbsp;</span><span style="color: #DD0000">'2014-10-22&nbsp;11:52:53'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">till_date</span><span style="color: #007700">`&nbsp;&gt;=&nbsp;</span><span style="color: #DD0000">'2014-10-22&nbsp;11:52:53'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0020&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">calendar</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">date</span><span style="color: #007700">`&nbsp;&gt;=&nbsp;</span><span style="color: #DD0000">'2014-10-22'<br /></span><span style="color: #0000BB"><strong>ORDER&nbsp;BY</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">date</span><span style="color: #007700">`<br />&nbsp;</span><span style="color: #0000BB"><strong>LIMIT</strong>&nbsp;5&nbsp;</span>
</span>
</code></td></tr>
</table>
</fieldset>

<fieldset id="ci_profiler_http_headers" style="border:1px solid #000;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#000;">&nbsp;&nbsp;HTTP HEADERS&nbsp;&nbsp;(<span style="cursor: pointer;" onclick="var s=document.getElementById('ci_profiler_httpheaders_table').style;s.display=s.display=='none'?'':'none';this.innerHTML=this.innerHTML=='Show'?'Hide':'Show';">Show</span>)</legend>


<table style="width:100%;display:none;" id="ci_profiler_httpheaders_table">
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">HTTP_ACCEPT&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">HTTP_USER_AGENT&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">HTTP_CONNECTION&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">keep-alive</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">SERVER_PORT&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">80</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">SERVER_NAME&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">localhost</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">REMOTE_ADDR&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">127.0.0.1</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">SERVER_SOFTWARE&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">Apache/2.4.4 (Win32) PHP/5.4.16</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">HTTP_ACCEPT_LANGUAGE&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">en-US,en;q=0.5</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">SCRIPT_NAME&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">/sma/index.php</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">REQUEST_METHOD&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">GET</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;"> HTTP_HOST&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">REMOTE_HOST&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">CONTENT_TYPE&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">SERVER_PROTOCOL&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">HTTP/1.1</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">QUERY_STRING&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">HTTP_ACCEPT_ENCODING&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">gzip, deflate</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">HTTP_X_FORWARDED_FOR&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">HTTP_DNT&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;"></td></tr>
</table>
</fieldset><fieldset id="ci_profiler_csession" style="border:1px solid #000;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;"><legend style="color:#000;">&nbsp;&nbsp;SESSION DATA&nbsp;&nbsp;(<span style="cursor: pointer;" onclick="var s=document.getElementById('ci_profiler_session_data').style;s.display=s.display=='none'?'':'none';this.innerHTML=this.innerHTML=='Show'?'Hide':'Show';">Show</span>)</legend><table style="width:100%;display:none;" id="ci_profiler_session_data"><tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">session_id&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">622eee97bd5495ee1a3c3d6277d60f5f</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">ip_address&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">127.0.0.1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">user_agent&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">last_activity&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1413949898</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">requested_page&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">products</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">identity&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">owner@tecdiary.com</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">username&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">owner</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">email&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">owner@tecdiary.com</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">user_id&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">old_last_login&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1413943928</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">last_ip&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">127.0.0.1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">avatar&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">gender&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">male</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">user_csrf&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">uMoAs4d5jePN0SarQLCT</td></tr>
</table>
</fieldset>

<fieldset id="ci_profiler_config" style="border:1px solid #000;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#000;">&nbsp;&nbsp;CONFIG VARIABLES&nbsp;&nbsp;(<span style="cursor: pointer;" onclick="var s=document.getElementById('ci_profiler_config_table').style;s.display=s.display=='none'?'':'none';this.innerHTML=this.innerHTML=='Show'?'Hide':'Show';">Show</span>)</legend>


<table style="width:100%;display:none;" id="ci_profiler_config_table">
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">base_url&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">http://localhost/sma/</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">index_page&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">uri_protocol&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">AUTO</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">url_suffix&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">language&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">english</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">charset&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">UTF-8</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">enable_hooks&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">subclass_prefix&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">MY_</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">composer_autoload&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">permitted_uri_chars&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">a-z 0-9~%.:_\-</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">allow_get_array&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">enable_query_strings&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">controller_trigger&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">c</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">function_trigger&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">m</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">directory_trigger&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">d</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">log_threshold&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">0</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">log_path&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">log_file_extension&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">log_file_permissions&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">420</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">log_date_format&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">Y-m-d H:i:s</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">error_views_path&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">cache_path&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">encryption_key&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">6eae3461f29a7ce24843b5923d471014</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_driver&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">cookie</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_valid_drivers&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">Array
(
)
</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_cookie_name&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">sess</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_expiration&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">172800</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_expire_on_close&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_encrypt_cookie&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_use_database&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_table_name&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">sessions</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_match_ip&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_match_useragent&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_time_to_update&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">600</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">cookie_prefix&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">sma_</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">cookie_domain&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">cookie_path&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">/</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">cookie_secure&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">cookie_httponly&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">standardize_newlines&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">global_xss_filtering&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">csrf_protection&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">csrf_token_name&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">token</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">csrf_cookie_name&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">token_cookie</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">csrf_expire&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">7200</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">csrf_regenerate&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">csrf_exclude_uris&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">Array
(
)
</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">compress_output&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">minify_output&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">time_reference&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">local</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">rewrite_short_tags&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">proxy_ips&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">ion_auth&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">Array
(
    [use_mongodb] =&gt; 
    [collections] =&gt; Array
        (
            [users] =&gt; users
            [groups] =&gt; groups
            [login_attempts] =&gt; login_attempts
        )

    [tables] =&gt; Array
        (
            [users] =&gt; users
            [groups] =&gt; groups
            [users_groups] =&gt; users_groups
            [login_attempts] =&gt; login_attempts
        )

    [join] =&gt; Array
        (
            [users] =&gt; user_id
            [groups] =&gt; group_id
        )

    [hash_method] =&gt; sha1
    [default_rounds] =&gt; 8
    [random_rounds] =&gt; 
    [min_rounds] =&gt; 5
    [max_rounds] =&gt; 9
    [site_title] =&gt; Stock Manager
    [admin_email] =&gt; contact@tecdiary.com
    [default_group] =&gt; customer
    [admin_group] =&gt; admin
    [identity] =&gt; email
    [min_password_length] =&gt; 8
    [max_password_length] =&gt; 20
    [email_activation] =&gt; 1
    [manual_activation] =&gt; 
    [remember_users] =&gt; 1
    [user_expire] =&gt; 86500
    [user_extend_on_login] =&gt; 
    [track_login_attempts] =&gt; 1
    [track_login_ip_address] =&gt; 1
    [maximum_login_attempts] =&gt; 3
    [lockout_time] =&gt; 600
    [forgot_password_expiration] =&gt; 0
    [use_ci_email] =&gt; 1
    [email_config] =&gt; Array
        (
            [mailtype] =&gt; html
        )

    [email_templates] =&gt; auth/email/
    [email_activate] =&gt; activate.tpl.php
    [email_forgot_password] =&gt; forgot_password.tpl.php
    [email_forgot_password_complete] =&gt; new_password.tpl.php
    [salt_length] =&gt; 10
    [store_salt] =&gt; 
    [delimiters_source] =&gt; config
    [message_start_delimiter] =&gt; &lt;p&gt;
    [message_end_delimiter] =&gt; &lt;/p&gt;
    [error_start_delimiter] =&gt; &lt;p&gt;
    [error_end_delimiter] =&gt; &lt;/p&gt;
)
</td></tr>
</table>
</fieldset></div><hr><?php if($_SERVER['REMOTE_ADDR'] != '127.0.0.1') exit; ?>
                <div id="codeigniter_profiler" style="clear:both;background-color:#fff;padding:10px;">

<fieldset id="ci_profiler_benchmarks" style="border:1px solid #900;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#900;">&nbsp;&nbsp;BENCHMARKS&nbsp;&nbsp;</legend>


<table style="width:100%;">
<tr><td style="padding:5px;width:50%;color:#000;font-weight:bold;background-color:#ddd;">Loading Time: Base Classes&nbsp;&nbsp;</td><td style="padding:5px;width:50%;color:#900;font-weight:normal;background-color:#ddd;">0.0210</td></tr>
<tr><td style="padding:5px;width:50%;color:#000;font-weight:bold;background-color:#ddd;">Controller Execution Time ( System Settings / Index )&nbsp;&nbsp;</td><td style="padding:5px;width:50%;color:#900;font-weight:normal;background-color:#ddd;">0.1050</td></tr>
<tr><td style="padding:5px;width:50%;color:#000;font-weight:bold;background-color:#ddd;">Total Execution Time&nbsp;&nbsp;</td><td style="padding:5px;width:50%;color:#900;font-weight:normal;background-color:#ddd;">0.1330</td></tr>
</table>
</fieldset>

<fieldset id="ci_profiler_get" style="border:1px solid #cd6e00;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#cd6e00;">&nbsp;&nbsp;GET DATA&nbsp;&nbsp;</legend>
<div style="color:#cd6e00;font-weight:normal;padding:4px 0 4px 0;">No GET data exists</div></fieldset>

<fieldset id="ci_profiler_memory_usage" style="border:1px solid #5a0099;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#5a0099;">&nbsp;&nbsp;MEMORY USAGE&nbsp;&nbsp;</legend>
<div style="color:#5a0099;font-weight:normal;padding:4px 0 4px 0;">3,966 kb<br>4,155 kb (peak)</div></fieldset>

<fieldset id="ci_profiler_post" style="border:1px solid #009900;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#009900;">&nbsp;&nbsp;POST DATA&nbsp;&nbsp;</legend>
<div style="color:#009900;font-weight:normal;padding:4px 0 4px 0;">No POST data exists</div></fieldset>

<fieldset id="ci_profiler_uri_string" style="border:1px solid #000;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#000;">&nbsp;&nbsp;URI STRING&nbsp;&nbsp;</legend>
<div style="color:#000;font-weight:normal;padding:4px 0 4px 0;">system_settings</div></fieldset>

<fieldset id="ci_profiler_controller_info" style="border:1px solid #995300;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#995300;">&nbsp;&nbsp;CLASS/METHOD&nbsp;&nbsp;</legend>
<div style="color:#995300;font-weight:normal;padding:4px 0 4px 0;">system_settings/index</div></fieldset>

<fieldset style="border:1px solid #0000FF;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#0000FF;">&nbsp;&nbsp;DATABASE:&nbsp; sma (system_settings:$db)&nbsp;&nbsp;&nbsp;QUERIES: 11 (0.0040 seconds)&nbsp;&nbsp;(<span style="cursor: pointer;" onclick="var s=document.getElementById('ci_profiler_queries_db_0').style;s.display=s.display=='none'?'':'none';this.innerHTML=this.innerHTML=='Hide'?'Show':'Hide';">Hide</span>)</legend>


<table style="width:100%;" id="ci_profiler_queries_db_0">
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">sessions</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">session_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'622eee97bd5495ee1a3c3d6277d60f5f'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">ip_address</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'127.0.0.1'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">user_agent</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'Mozilla/5.0&nbsp;<strong>(</strong>Windows&nbsp;NT&nbsp;6.1;&nbsp;rv:32.0<strong>)</strong>&nbsp;Gecko/20100101&nbsp;Firefox/32.0'<br />&nbsp;</span><span style="color: #0000BB"><strong>LIMIT</strong>&nbsp;1&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">settings</span><span style="color: #007700">`&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">users_groups</span><span style="color: #007700">`.`</span><span style="color: #DD0000">group_id</span><span style="color: #007700">`&nbsp;as&nbsp;`</span><span style="color: #DD0000">id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">groups</span><span style="color: #007700">`.`</span><span style="color: #DD0000">name</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">groups</span><span style="color: #007700">`.`</span><span style="color: #DD0000">description</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">users_groups</span><span style="color: #007700">`<br /></span><span style="color: #0000BB">JO<strong>IN</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">groups</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>ON</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">users_groups</span><span style="color: #007700">`.`</span><span style="color: #DD0000">group_id</span><span style="color: #007700">`=`</span><span style="color: #DD0000">groups</span><span style="color: #007700">`.`</span><span style="color: #DD0000">id</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">users_groups</span><span style="color: #007700">`.`</span><span style="color: #DD0000">user_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'1'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">date_format</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'5'<br />&nbsp;</span><span style="color: #0000BB"><strong>LIMIT</strong>&nbsp;1&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">settings</span><span style="color: #007700">`&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">currencies</span><span style="color: #007700">`&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">date_format</span><span style="color: #007700">`&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">tax_rates</span><span style="color: #007700">`&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">warehouses</span><span style="color: #007700">`&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">notifications</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">from_date</span><span style="color: #007700">`&nbsp;&lt;=&nbsp;</span><span style="color: #DD0000">'2014-10-22&nbsp;11:52:50'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">till_date</span><span style="color: #007700">`&nbsp;&gt;=&nbsp;</span><span style="color: #DD0000">'2014-10-22&nbsp;11:52:50'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">calendar</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">date</span><span style="color: #007700">`&nbsp;&gt;=&nbsp;</span><span style="color: #DD0000">'2014-10-22'<br /></span><span style="color: #0000BB"><strong>ORDER&nbsp;BY</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">date</span><span style="color: #007700">`<br />&nbsp;</span><span style="color: #0000BB"><strong>LIMIT</strong>&nbsp;5&nbsp;</span>
</span>
</code></td></tr>
</table>
</fieldset>

<fieldset id="ci_profiler_http_headers" style="border:1px solid #000;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#000;">&nbsp;&nbsp;HTTP HEADERS&nbsp;&nbsp;(<span style="cursor: pointer;" onclick="var s=document.getElementById('ci_profiler_httpheaders_table').style;s.display=s.display=='none'?'':'none';this.innerHTML=this.innerHTML=='Show'?'Hide':'Show';">Show</span>)</legend>


<table style="width:100%;display:none;" id="ci_profiler_httpheaders_table">
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">HTTP_ACCEPT&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">HTTP_USER_AGENT&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">HTTP_CONNECTION&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">keep-alive</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">SERVER_PORT&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">80</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">SERVER_NAME&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">localhost</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">REMOTE_ADDR&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">127.0.0.1</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">SERVER_SOFTWARE&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">Apache/2.4.4 (Win32) PHP/5.4.16</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">HTTP_ACCEPT_LANGUAGE&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">en-US,en;q=0.5</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">SCRIPT_NAME&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">/sma/index.php</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">REQUEST_METHOD&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">GET</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;"> HTTP_HOST&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">REMOTE_HOST&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">CONTENT_TYPE&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">SERVER_PROTOCOL&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">HTTP/1.1</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">QUERY_STRING&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">HTTP_ACCEPT_ENCODING&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">gzip, deflate</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">HTTP_X_FORWARDED_FOR&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">HTTP_DNT&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;"></td></tr>
</table>
</fieldset><fieldset id="ci_profiler_csession" style="border:1px solid #000;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;"><legend style="color:#000;">&nbsp;&nbsp;SESSION DATA&nbsp;&nbsp;(<span style="cursor: pointer;" onclick="var s=document.getElementById('ci_profiler_session_data').style;s.display=s.display=='none'?'':'none';this.innerHTML=this.innerHTML=='Show'?'Hide':'Show';">Show</span>)</legend><table style="width:100%;display:none;" id="ci_profiler_session_data"><tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">session_id&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">622eee97bd5495ee1a3c3d6277d60f5f</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">ip_address&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">127.0.0.1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">user_agent&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">last_activity&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1413949898</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">requested_page&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">products</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">identity&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">owner@tecdiary.com</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">username&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">owner</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">email&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">owner@tecdiary.com</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">user_id&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">old_last_login&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1413943928</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">last_ip&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">127.0.0.1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">avatar&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">gender&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">male</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">user_csrf&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">d47EhUmRgSuneTF9YsW3</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">flash:old:message&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">Settings Successfully Updated</td></tr>
</table>
</fieldset>

<fieldset id="ci_profiler_config" style="border:1px solid #000;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#000;">&nbsp;&nbsp;CONFIG VARIABLES&nbsp;&nbsp;(<span style="cursor: pointer;" onclick="var s=document.getElementById('ci_profiler_config_table').style;s.display=s.display=='none'?'':'none';this.innerHTML=this.innerHTML=='Show'?'Hide':'Show';">Show</span>)</legend>


<table style="width:100%;display:none;" id="ci_profiler_config_table">
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">base_url&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">http://localhost/sma/</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">index_page&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">uri_protocol&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">AUTO</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">url_suffix&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">language&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">english</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">charset&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">UTF-8</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">enable_hooks&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">subclass_prefix&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">MY_</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">composer_autoload&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">permitted_uri_chars&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">a-z 0-9~%.:_\-</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">allow_get_array&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">enable_query_strings&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">controller_trigger&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">c</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">function_trigger&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">m</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">directory_trigger&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">d</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">log_threshold&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">0</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">log_path&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">log_file_extension&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">log_file_permissions&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">420</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">log_date_format&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">Y-m-d H:i:s</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">error_views_path&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">cache_path&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">encryption_key&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">6eae3461f29a7ce24843b5923d471014</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_driver&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">cookie</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_valid_drivers&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">Array
(
)
</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_cookie_name&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">sess</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_expiration&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">172800</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_expire_on_close&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_encrypt_cookie&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_use_database&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_table_name&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">sessions</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_match_ip&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_match_useragent&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_time_to_update&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">600</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">cookie_prefix&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">sma_</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">cookie_domain&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">cookie_path&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">/</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">cookie_secure&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">cookie_httponly&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">standardize_newlines&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">global_xss_filtering&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">csrf_protection&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">csrf_token_name&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">token</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">csrf_cookie_name&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">token_cookie</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">csrf_expire&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">7200</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">csrf_regenerate&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">csrf_exclude_uris&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">Array
(
)
</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">compress_output&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">minify_output&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">time_reference&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">local</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">rewrite_short_tags&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">proxy_ips&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">ion_auth&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">Array
(
    [use_mongodb] =&gt; 
    [collections] =&gt; Array
        (
            [users] =&gt; users
            [groups] =&gt; groups
            [login_attempts] =&gt; login_attempts
        )

    [tables] =&gt; Array
        (
            [users] =&gt; users
            [groups] =&gt; groups
            [users_groups] =&gt; users_groups
            [login_attempts] =&gt; login_attempts
        )

    [join] =&gt; Array
        (
            [users] =&gt; user_id
            [groups] =&gt; group_id
        )

    [hash_method] =&gt; sha1
    [default_rounds] =&gt; 8
    [random_rounds] =&gt; 
    [min_rounds] =&gt; 5
    [max_rounds] =&gt; 9
    [site_title] =&gt; Stock Manager
    [admin_email] =&gt; contact@tecdiary.com
    [default_group] =&gt; customer
    [admin_group] =&gt; admin
    [identity] =&gt; email
    [min_password_length] =&gt; 8
    [max_password_length] =&gt; 20
    [email_activation] =&gt; 1
    [manual_activation] =&gt; 
    [remember_users] =&gt; 1
    [user_expire] =&gt; 86500
    [user_extend_on_login] =&gt; 
    [track_login_attempts] =&gt; 1
    [track_login_ip_address] =&gt; 1
    [maximum_login_attempts] =&gt; 3
    [lockout_time] =&gt; 600
    [forgot_password_expiration] =&gt; 0
    [use_ci_email] =&gt; 1
    [email_config] =&gt; Array
        (
            [mailtype] =&gt; html
        )

    [email_templates] =&gt; auth/email/
    [email_activate] =&gt; activate.tpl.php
    [email_forgot_password] =&gt; forgot_password.tpl.php
    [email_forgot_password_complete] =&gt; new_password.tpl.php
    [salt_length] =&gt; 10
    [store_salt] =&gt; 
    [delimiters_source] =&gt; config
    [message_start_delimiter] =&gt; &lt;p&gt;
    [message_end_delimiter] =&gt; &lt;/p&gt;
    [error_start_delimiter] =&gt; &lt;p&gt;
    [error_end_delimiter] =&gt; &lt;/p&gt;
)
</td></tr>
</table>
</fieldset></div><hr><?php if($_SERVER['REMOTE_ADDR'] != '127.0.0.1') exit; ?>
                <div id="codeigniter_profiler" style="clear:both;background-color:#fff;padding:10px;">

<fieldset id="ci_profiler_benchmarks" style="border:1px solid #900;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#900;">&nbsp;&nbsp;BENCHMARKS&nbsp;&nbsp;</legend>


<table style="width:100%;">
<tr><td style="padding:5px;width:50%;color:#000;font-weight:bold;background-color:#ddd;">Loading Time: Base Classes&nbsp;&nbsp;</td><td style="padding:5px;width:50%;color:#900;font-weight:normal;background-color:#ddd;">0.0250</td></tr>
<tr><td style="padding:5px;width:50%;color:#000;font-weight:bold;background-color:#ddd;">Controller Execution Time ( System Settings / Index )&nbsp;&nbsp;</td><td style="padding:5px;width:50%;color:#900;font-weight:normal;background-color:#ddd;">0.1040</td></tr>
<tr><td style="padding:5px;width:50%;color:#000;font-weight:bold;background-color:#ddd;">Total Execution Time&nbsp;&nbsp;</td><td style="padding:5px;width:50%;color:#900;font-weight:normal;background-color:#ddd;">0.1370</td></tr>
</table>
</fieldset>

<fieldset id="ci_profiler_get" style="border:1px solid #cd6e00;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#cd6e00;">&nbsp;&nbsp;GET DATA&nbsp;&nbsp;</legend>
<div style="color:#cd6e00;font-weight:normal;padding:4px 0 4px 0;">No GET data exists</div></fieldset>

<fieldset id="ci_profiler_memory_usage" style="border:1px solid #5a0099;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#5a0099;">&nbsp;&nbsp;MEMORY USAGE&nbsp;&nbsp;</legend>
<div style="color:#5a0099;font-weight:normal;padding:4px 0 4px 0;">3,964 kb<br>4,152 kb (peak)</div></fieldset>

<fieldset id="ci_profiler_post" style="border:1px solid #009900;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#009900;">&nbsp;&nbsp;POST DATA&nbsp;&nbsp;</legend>
<div style="color:#009900;font-weight:normal;padding:4px 0 4px 0;">No POST data exists</div></fieldset>

<fieldset id="ci_profiler_uri_string" style="border:1px solid #000;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#000;">&nbsp;&nbsp;URI STRING&nbsp;&nbsp;</legend>
<div style="color:#000;font-weight:normal;padding:4px 0 4px 0;">system_settings</div></fieldset>

<fieldset id="ci_profiler_controller_info" style="border:1px solid #995300;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#995300;">&nbsp;&nbsp;CLASS/METHOD&nbsp;&nbsp;</legend>
<div style="color:#995300;font-weight:normal;padding:4px 0 4px 0;">system_settings/index</div></fieldset>

<fieldset style="border:1px solid #0000FF;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#0000FF;">&nbsp;&nbsp;DATABASE:&nbsp; sma (system_settings:$db)&nbsp;&nbsp;&nbsp;QUERIES: 11 (0.0020 seconds)&nbsp;&nbsp;(<span style="cursor: pointer;" onclick="var s=document.getElementById('ci_profiler_queries_db_0').style;s.display=s.display=='none'?'':'none';this.innerHTML=this.innerHTML=='Hide'?'Show':'Hide';">Hide</span>)</legend>


<table style="width:100%;" id="ci_profiler_queries_db_0">
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">sessions</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">session_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'622eee97bd5495ee1a3c3d6277d60f5f'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">ip_address</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'127.0.0.1'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">user_agent</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'Mozilla/5.0&nbsp;<strong>(</strong>Windows&nbsp;NT&nbsp;6.1;&nbsp;rv:32.0<strong>)</strong>&nbsp;Gecko/20100101&nbsp;Firefox/32.0'<br />&nbsp;</span><span style="color: #0000BB"><strong>LIMIT</strong>&nbsp;1&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">settings</span><span style="color: #007700">`&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">users_groups</span><span style="color: #007700">`.`</span><span style="color: #DD0000">group_id</span><span style="color: #007700">`&nbsp;as&nbsp;`</span><span style="color: #DD0000">id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">groups</span><span style="color: #007700">`.`</span><span style="color: #DD0000">name</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">groups</span><span style="color: #007700">`.`</span><span style="color: #DD0000">description</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">users_groups</span><span style="color: #007700">`<br /></span><span style="color: #0000BB">JO<strong>IN</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">groups</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>ON</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">users_groups</span><span style="color: #007700">`.`</span><span style="color: #DD0000">group_id</span><span style="color: #007700">`=`</span><span style="color: #DD0000">groups</span><span style="color: #007700">`.`</span><span style="color: #DD0000">id</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">users_groups</span><span style="color: #007700">`.`</span><span style="color: #DD0000">user_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'1'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">date_format</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'5'<br />&nbsp;</span><span style="color: #0000BB"><strong>LIMIT</strong>&nbsp;1&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">settings</span><span style="color: #007700">`&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">currencies</span><span style="color: #007700">`&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">date_format</span><span style="color: #007700">`&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">tax_rates</span><span style="color: #007700">`&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">warehouses</span><span style="color: #007700">`&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">notifications</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">from_date</span><span style="color: #007700">`&nbsp;&lt;=&nbsp;</span><span style="color: #DD0000">'2014-10-22&nbsp;11:52:29'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">till_date</span><span style="color: #007700">`&nbsp;&gt;=&nbsp;</span><span style="color: #DD0000">'2014-10-22&nbsp;11:52:29'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">calendar</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">date</span><span style="color: #007700">`&nbsp;&gt;=&nbsp;</span><span style="color: #DD0000">'2014-10-22'<br /></span><span style="color: #0000BB"><strong>ORDER&nbsp;BY</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">date</span><span style="color: #007700">`<br />&nbsp;</span><span style="color: #0000BB"><strong>LIMIT</strong>&nbsp;5&nbsp;</span>
</span>
</code></td></tr>
</table>
</fieldset>

<fieldset id="ci_profiler_http_headers" style="border:1px solid #000;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#000;">&nbsp;&nbsp;HTTP HEADERS&nbsp;&nbsp;(<span style="cursor: pointer;" onclick="var s=document.getElementById('ci_profiler_httpheaders_table').style;s.display=s.display=='none'?'':'none';this.innerHTML=this.innerHTML=='Show'?'Hide':'Show';">Show</span>)</legend>


<table style="width:100%;display:none;" id="ci_profiler_httpheaders_table">
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">HTTP_ACCEPT&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">HTTP_USER_AGENT&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">HTTP_CONNECTION&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">keep-alive</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">SERVER_PORT&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">80</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">SERVER_NAME&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">localhost</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">REMOTE_ADDR&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">127.0.0.1</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">SERVER_SOFTWARE&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">Apache/2.4.4 (Win32) PHP/5.4.16</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">HTTP_ACCEPT_LANGUAGE&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">en-US,en;q=0.5</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">SCRIPT_NAME&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">/sma/index.php</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">REQUEST_METHOD&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">GET</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;"> HTTP_HOST&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">REMOTE_HOST&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">CONTENT_TYPE&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">SERVER_PROTOCOL&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">HTTP/1.1</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">QUERY_STRING&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">HTTP_ACCEPT_ENCODING&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">gzip, deflate</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">HTTP_X_FORWARDED_FOR&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">HTTP_DNT&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;"></td></tr>
</table>
</fieldset><fieldset id="ci_profiler_csession" style="border:1px solid #000;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;"><legend style="color:#000;">&nbsp;&nbsp;SESSION DATA&nbsp;&nbsp;(<span style="cursor: pointer;" onclick="var s=document.getElementById('ci_profiler_session_data').style;s.display=s.display=='none'?'':'none';this.innerHTML=this.innerHTML=='Show'?'Hide':'Show';">Show</span>)</legend><table style="width:100%;display:none;" id="ci_profiler_session_data"><tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">session_id&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">622eee97bd5495ee1a3c3d6277d60f5f</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">ip_address&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">127.0.0.1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">user_agent&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">last_activity&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1413949898</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">requested_page&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">products</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">identity&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">owner@tecdiary.com</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">username&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">owner</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">email&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">owner@tecdiary.com</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">user_id&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">old_last_login&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1413943928</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">last_ip&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">127.0.0.1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">avatar&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">gender&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">male</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">user_csrf&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">d47EhUmRgSuneTF9YsW3</td></tr>
</table>
</fieldset>

<fieldset id="ci_profiler_config" style="border:1px solid #000;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#000;">&nbsp;&nbsp;CONFIG VARIABLES&nbsp;&nbsp;(<span style="cursor: pointer;" onclick="var s=document.getElementById('ci_profiler_config_table').style;s.display=s.display=='none'?'':'none';this.innerHTML=this.innerHTML=='Show'?'Hide':'Show';">Show</span>)</legend>


<table style="width:100%;display:none;" id="ci_profiler_config_table">
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">base_url&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">http://localhost/sma/</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">index_page&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">uri_protocol&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">AUTO</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">url_suffix&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">language&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">english</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">charset&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">UTF-8</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">enable_hooks&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">subclass_prefix&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">MY_</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">composer_autoload&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">permitted_uri_chars&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">a-z 0-9~%.:_\-</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">allow_get_array&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">enable_query_strings&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">controller_trigger&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">c</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">function_trigger&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">m</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">directory_trigger&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">d</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">log_threshold&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">0</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">log_path&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">log_file_extension&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">log_file_permissions&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">420</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">log_date_format&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">Y-m-d H:i:s</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">error_views_path&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">cache_path&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">encryption_key&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">6eae3461f29a7ce24843b5923d471014</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_driver&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">cookie</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_valid_drivers&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">Array
(
)
</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_cookie_name&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">sess</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_expiration&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">172800</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_expire_on_close&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_encrypt_cookie&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_use_database&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_table_name&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">sessions</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_match_ip&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_match_useragent&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_time_to_update&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">600</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">cookie_prefix&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">sma_</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">cookie_domain&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">cookie_path&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">/</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">cookie_secure&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">cookie_httponly&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">standardize_newlines&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">global_xss_filtering&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">csrf_protection&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">csrf_token_name&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">token</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">csrf_cookie_name&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">token_cookie</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">csrf_expire&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">7200</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">csrf_regenerate&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">csrf_exclude_uris&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">Array
(
)
</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">compress_output&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">minify_output&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">time_reference&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">local</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">rewrite_short_tags&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">proxy_ips&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">ion_auth&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">Array
(
    [use_mongodb] =&gt; 
    [collections] =&gt; Array
        (
            [users] =&gt; users
            [groups] =&gt; groups
            [login_attempts] =&gt; login_attempts
        )

    [tables] =&gt; Array
        (
            [users] =&gt; users
            [groups] =&gt; groups
            [users_groups] =&gt; users_groups
            [login_attempts] =&gt; login_attempts
        )

    [join] =&gt; Array
        (
            [users] =&gt; user_id
            [groups] =&gt; group_id
        )

    [hash_method] =&gt; sha1
    [default_rounds] =&gt; 8
    [random_rounds] =&gt; 
    [min_rounds] =&gt; 5
    [max_rounds] =&gt; 9
    [site_title] =&gt; Stock Manager
    [admin_email] =&gt; contact@tecdiary.com
    [default_group] =&gt; customer
    [admin_group] =&gt; admin
    [identity] =&gt; email
    [min_password_length] =&gt; 8
    [max_password_length] =&gt; 20
    [email_activation] =&gt; 1
    [manual_activation] =&gt; 
    [remember_users] =&gt; 1
    [user_expire] =&gt; 86500
    [user_extend_on_login] =&gt; 
    [track_login_attempts] =&gt; 1
    [track_login_ip_address] =&gt; 1
    [maximum_login_attempts] =&gt; 3
    [lockout_time] =&gt; 600
    [forgot_password_expiration] =&gt; 0
    [use_ci_email] =&gt; 1
    [email_config] =&gt; Array
        (
            [mailtype] =&gt; html
        )

    [email_templates] =&gt; auth/email/
    [email_activate] =&gt; activate.tpl.php
    [email_forgot_password] =&gt; forgot_password.tpl.php
    [email_forgot_password_complete] =&gt; new_password.tpl.php
    [salt_length] =&gt; 10
    [store_salt] =&gt; 
    [delimiters_source] =&gt; config
    [message_start_delimiter] =&gt; &lt;p&gt;
    [message_end_delimiter] =&gt; &lt;/p&gt;
    [error_start_delimiter] =&gt; &lt;p&gt;
    [error_end_delimiter] =&gt; &lt;/p&gt;
)
</td></tr>
</table>
</fieldset></div><hr><?php if($_SERVER['REMOTE_ADDR'] != '127.0.0.1') exit; ?>
                <div id="codeigniter_profiler" style="clear:both;background-color:#fff;padding:10px;">

<fieldset id="ci_profiler_benchmarks" style="border:1px solid #900;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#900;">&nbsp;&nbsp;BENCHMARKS&nbsp;&nbsp;</legend>


<table style="width:100%;">
<tr><td style="padding:5px;width:50%;color:#000;font-weight:bold;background-color:#ddd;">Loading Time: Base Classes&nbsp;&nbsp;</td><td style="padding:5px;width:50%;color:#900;font-weight:normal;background-color:#ddd;">0.0170</td></tr>
<tr><td style="padding:5px;width:50%;color:#000;font-weight:bold;background-color:#ddd;">Controller Execution Time ( System Settings / Index )&nbsp;&nbsp;</td><td style="padding:5px;width:50%;color:#900;font-weight:normal;background-color:#ddd;">0.1530</td></tr>
<tr><td style="padding:5px;width:50%;color:#000;font-weight:bold;background-color:#ddd;">Total Execution Time&nbsp;&nbsp;</td><td style="padding:5px;width:50%;color:#900;font-weight:normal;background-color:#ddd;">0.1780</td></tr>
</table>
</fieldset>

<fieldset id="ci_profiler_get" style="border:1px solid #cd6e00;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#cd6e00;">&nbsp;&nbsp;GET DATA&nbsp;&nbsp;</legend>
<div style="color:#cd6e00;font-weight:normal;padding:4px 0 4px 0;">No GET data exists</div></fieldset>

<fieldset id="ci_profiler_memory_usage" style="border:1px solid #5a0099;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#5a0099;">&nbsp;&nbsp;MEMORY USAGE&nbsp;&nbsp;</legend>
<div style="color:#5a0099;font-weight:normal;padding:4px 0 4px 0;">3,964 kb<br>4,152 kb (peak)</div></fieldset>

<fieldset id="ci_profiler_post" style="border:1px solid #009900;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#009900;">&nbsp;&nbsp;POST DATA&nbsp;&nbsp;</legend>
<div style="color:#009900;font-weight:normal;padding:4px 0 4px 0;">No POST data exists</div></fieldset>

<fieldset id="ci_profiler_uri_string" style="border:1px solid #000;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#000;">&nbsp;&nbsp;URI STRING&nbsp;&nbsp;</legend>
<div style="color:#000;font-weight:normal;padding:4px 0 4px 0;">system_settings</div></fieldset>

<fieldset id="ci_profiler_controller_info" style="border:1px solid #995300;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#995300;">&nbsp;&nbsp;CLASS/METHOD&nbsp;&nbsp;</legend>
<div style="color:#995300;font-weight:normal;padding:4px 0 4px 0;">system_settings/index</div></fieldset>

<fieldset style="border:1px solid #0000FF;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#0000FF;">&nbsp;&nbsp;DATABASE:&nbsp; sma (system_settings:$db)&nbsp;&nbsp;&nbsp;QUERIES: 11 (0.0040 seconds)&nbsp;&nbsp;(<span style="cursor: pointer;" onclick="var s=document.getElementById('ci_profiler_queries_db_0').style;s.display=s.display=='none'?'':'none';this.innerHTML=this.innerHTML=='Hide'?'Show':'Hide';">Hide</span>)</legend>


<table style="width:100%;" id="ci_profiler_queries_db_0">
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">sessions</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">session_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'622eee97bd5495ee1a3c3d6277d60f5f'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">ip_address</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'127.0.0.1'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">user_agent</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'Mozilla/5.0&nbsp;<strong>(</strong>Windows&nbsp;NT&nbsp;6.1;&nbsp;rv:32.0<strong>)</strong>&nbsp;Gecko/20100101&nbsp;Firefox/32.0'<br />&nbsp;</span><span style="color: #0000BB"><strong>LIMIT</strong>&nbsp;1&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">settings</span><span style="color: #007700">`&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">users_groups</span><span style="color: #007700">`.`</span><span style="color: #DD0000">group_id</span><span style="color: #007700">`&nbsp;as&nbsp;`</span><span style="color: #DD0000">id</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">groups</span><span style="color: #007700">`.`</span><span style="color: #DD0000">name</span><span style="color: #007700">`,&nbsp;`</span><span style="color: #DD0000">groups</span><span style="color: #007700">`.`</span><span style="color: #DD0000">description</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">users_groups</span><span style="color: #007700">`<br /></span><span style="color: #0000BB">JO<strong>IN</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">groups</span><span style="color: #007700">`&nbsp;</span><span style="color: #0000BB"><strong>ON</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">users_groups</span><span style="color: #007700">`.`</span><span style="color: #DD0000">group_id</span><span style="color: #007700">`=`</span><span style="color: #DD0000">groups</span><span style="color: #007700">`.`</span><span style="color: #DD0000">id</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">users_groups</span><span style="color: #007700">`.`</span><span style="color: #DD0000">user_id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'1'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">date_format</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">id</span><span style="color: #007700">`&nbsp;=&nbsp;</span><span style="color: #DD0000">'5'<br />&nbsp;</span><span style="color: #0000BB"><strong>LIMIT</strong>&nbsp;1&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0010&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">settings</span><span style="color: #007700">`&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">currencies</span><span style="color: #007700">`&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">date_format</span><span style="color: #007700">`&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">tax_rates</span><span style="color: #007700">`&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">warehouses</span><span style="color: #007700">`&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">notifications</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">from_date</span><span style="color: #007700">`&nbsp;&lt;=&nbsp;</span><span style="color: #DD0000">'2014-10-22&nbsp;11:52:09'<br /></span><span style="color: #007700"><strong>AND</strong>&nbsp;`</span><span style="color: #DD0000">till_date</span><span style="color: #007700">`&nbsp;&gt;=&nbsp;</span><span style="color: #DD0000">'2014-10-22&nbsp;11:52:09'&nbsp;</span>
</span>
</code></td></tr>
<tr><td style="padding:5px;vertical-align:top;width:1%;color:#900;font-weight:normal;background-color:#ddd;">0.0000&nbsp;&nbsp;</td><td style="padding:5px;color:#000;font-weight:normal;background-color:#ddd;"><code><span style="color: #000000">
<span style="color: #0000BB"><strong>SELECT</strong>&nbsp;</span><span style="color: #007700">*<br /></span><span style="color: #0000BB"><strong>FROM</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">calendar</span><span style="color: #007700">`<br /></span><span style="color: #0000BB"><strong>WHERE</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">date</span><span style="color: #007700">`&nbsp;&gt;=&nbsp;</span><span style="color: #DD0000">'2014-10-22'<br /></span><span style="color: #0000BB"><strong>ORDER&nbsp;BY</strong>&nbsp;</span><span style="color: #007700">`</span><span style="color: #DD0000">date</span><span style="color: #007700">`<br />&nbsp;</span><span style="color: #0000BB"><strong>LIMIT</strong>&nbsp;5&nbsp;</span>
</span>
</code></td></tr>
</table>
</fieldset>

<fieldset id="ci_profiler_http_headers" style="border:1px solid #000;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#000;">&nbsp;&nbsp;HTTP HEADERS&nbsp;&nbsp;(<span style="cursor: pointer;" onclick="var s=document.getElementById('ci_profiler_httpheaders_table').style;s.display=s.display=='none'?'':'none';this.innerHTML=this.innerHTML=='Show'?'Hide':'Show';">Show</span>)</legend>


<table style="width:100%;display:none;" id="ci_profiler_httpheaders_table">
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">HTTP_ACCEPT&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">text/html,application/xhtml+xml,application/xml;q=0.9,*/*;q=0.8</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">HTTP_USER_AGENT&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">HTTP_CONNECTION&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">keep-alive</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">SERVER_PORT&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">80</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">SERVER_NAME&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">localhost</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">REMOTE_ADDR&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">127.0.0.1</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">SERVER_SOFTWARE&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">Apache/2.4.4 (Win32) PHP/5.4.16</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">HTTP_ACCEPT_LANGUAGE&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">en-US,en;q=0.5</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">SCRIPT_NAME&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">/sma/index.php</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">REQUEST_METHOD&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">GET</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;"> HTTP_HOST&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">REMOTE_HOST&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">CONTENT_TYPE&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">SERVER_PROTOCOL&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">HTTP/1.1</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">QUERY_STRING&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">HTTP_ACCEPT_ENCODING&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;">gzip, deflate</td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">HTTP_X_FORWARDED_FOR&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="vertical-align:top;width:50%;padding:5px;color:#900;background-color:#ddd;">HTTP_DNT&nbsp;&nbsp;</td><td style="width:50%;padding:5px;color:#000;background-color:#ddd;"></td></tr>
</table>
</fieldset><fieldset id="ci_profiler_csession" style="border:1px solid #000;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;"><legend style="color:#000;">&nbsp;&nbsp;SESSION DATA&nbsp;&nbsp;(<span style="cursor: pointer;" onclick="var s=document.getElementById('ci_profiler_session_data').style;s.display=s.display=='none'?'':'none';this.innerHTML=this.innerHTML=='Show'?'Hide':'Show';">Show</span>)</legend><table style="width:100%;display:none;" id="ci_profiler_session_data"><tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">session_id&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">622eee97bd5495ee1a3c3d6277d60f5f</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">ip_address&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">127.0.0.1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">user_agent&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">Mozilla/5.0 (Windows NT 6.1; rv:32.0) Gecko/20100101 Firefox/32.0</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">last_activity&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1413949898</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">requested_page&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">products</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">identity&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">owner@tecdiary.com</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">username&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">owner</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">email&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">owner@tecdiary.com</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">user_id&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">old_last_login&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1413943928</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">last_ip&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">127.0.0.1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">avatar&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">gender&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">male</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">user_csrf&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">d47EhUmRgSuneTF9YsW3</td></tr>
</table>
</fieldset>

<fieldset id="ci_profiler_config" style="border:1px solid #000;padding:6px 10px 10px 10px;margin:20px 0 20px 0;background-color:#eee;">
<legend style="color:#000;">&nbsp;&nbsp;CONFIG VARIABLES&nbsp;&nbsp;(<span style="cursor: pointer;" onclick="var s=document.getElementById('ci_profiler_config_table').style;s.display=s.display=='none'?'':'none';this.innerHTML=this.innerHTML=='Show'?'Hide':'Show';">Show</span>)</legend>


<table style="width:100%;display:none;" id="ci_profiler_config_table">
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">base_url&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">http://localhost/sma/</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">index_page&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">uri_protocol&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">AUTO</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">url_suffix&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">language&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">english</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">charset&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">UTF-8</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">enable_hooks&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">subclass_prefix&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">MY_</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">composer_autoload&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">permitted_uri_chars&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">a-z 0-9~%.:_\-</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">allow_get_array&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">enable_query_strings&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">controller_trigger&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">c</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">function_trigger&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">m</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">directory_trigger&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">d</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">log_threshold&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">0</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">log_path&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">log_file_extension&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">log_file_permissions&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">420</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">log_date_format&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">Y-m-d H:i:s</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">error_views_path&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">cache_path&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">encryption_key&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">6eae3461f29a7ce24843b5923d471014</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_driver&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">cookie</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_valid_drivers&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">Array
(
)
</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_cookie_name&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">sess</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_expiration&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">172800</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_expire_on_close&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_encrypt_cookie&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_use_database&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_table_name&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">sessions</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_match_ip&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_match_useragent&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">sess_time_to_update&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">600</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">cookie_prefix&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">sma_</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">cookie_domain&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">cookie_path&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">/</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">cookie_secure&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">cookie_httponly&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">standardize_newlines&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">global_xss_filtering&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">csrf_protection&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">csrf_token_name&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">token</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">csrf_cookie_name&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">token_cookie</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">csrf_expire&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">7200</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">csrf_regenerate&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">csrf_exclude_uris&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">Array
(
)
</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">compress_output&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">minify_output&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">time_reference&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">local</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">rewrite_short_tags&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">1</td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">proxy_ips&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;"></td></tr>
<tr><td style="padding:5px;vertical-align:top;color:#900;background-color:#ddd;">ion_auth&nbsp;&nbsp;</td><td style="padding:5px;color:#000;background-color:#ddd;">Array
(
    [use_mongodb] =&gt; 
    [collections] =&gt; Array
        (
            [users] =&gt; users
            [groups] =&gt; groups
            [login_attempts] =&gt; login_attempts
        )

    [tables] =&gt; Array
        (
            [users] =&gt; users
            [groups] =&gt; groups
            [users_groups] =&gt; users_groups
            [login_attempts] =&gt; login_attempts
        )

    [join] =&gt; Array
        (
            [users] =&gt; user_id
            [groups] =&gt; group_id
        )

    [hash_method] =&gt; sha1
    [default_rounds] =&gt; 8
    [random_rounds] =&gt; 
    [min_rounds] =&gt; 5
    [max_rounds] =&gt; 9
    [site_title] =&gt; Stock Manager
    [admin_email] =&gt; contact@tecdiary.com
    [default_group] =&gt; customer
    [admin_group] =&gt; admin
    [identity] =&gt; email
    [min_password_length] =&gt; 8
    [max_password_length] =&gt; 20
    [email_activation] =&gt; 1
    [manual_activation] =&gt; 
    [remember_users] =&gt; 1
    [user_expire] =&gt; 86500
    [user_extend_on_login] =&gt; 
    [track_login_attempts] =&gt; 1
    [track_login_ip_address] =&gt; 1
    [maximum_login_attempts] =&gt; 3
    [lockout_time] =&gt; 600
    [forgot_password_expiration] =&gt; 0
    [use_ci_email] =&gt; 1
    [email_config] =&gt; Array
        (
            [mailtype] =&gt; html
        )

    [email_templates] =&gt; auth/email/
    [email_activate] =&gt; activate.tpl.php
    [email_forgot_password] =&gt; forgot_password.tpl.php
    [email_forgot_password_complete] =&gt; new_password.tpl.php
    [salt_length] =&gt; 10
    [store_salt] =&gt; 
    [delimiters_source] =&gt; config
    [message_start_delimiter] =&gt; &lt;p&gt;
    [message_end_delimiter] =&gt; &lt;/p&gt;
    [error_start_delimiter] =&gt; &lt;p&gt;
    [error_end_delimiter] =&gt; &lt;/p&gt;
)
</td></tr>
</table>
</fieldset></div><hr>