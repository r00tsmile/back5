if($this->get_request_method() != "GET") $this->response('',406);

$package_name = $_GET['package_name'];

$sql_settings = "SELECT * FROM tbl_settings";
$sql_ads = "SELECT * FROM tbl_ads";
$sql_ads_status = "SELECT * FROM tbl_ads_status";
$sql_app = "SELECT package_name, status, redirect_url FROM tbl_app_config WHERE package_name = '$package_name' LIMIT 1";

$settings = $this->get_one_result($sql_settings);
$ads = $this->get_one_result($sql_ads);
$ads_status = $this->get_one_result($sql_ads_status);

$app_count = count($this->get_list_result($sql_app));
$app = $this->get_one_result($sql_app);

$app_array = array( 'package_name' => '', 'status' => '', 'redirect_url' => '');

if ($app_count > 0) {
    $respon = array('status' => 'ok', 'app' => $app, 'settings' => $settings, 'ads' => $ads, 'ads_status' => $ads_status);
} else {
    $respon = array('status' => 'ok', 'app' => $app_array, 'settings' => $settings, 'ads' => $ads, 'ads_status' => $ads_status);
}


$this->response($this->json($respon), 200); 