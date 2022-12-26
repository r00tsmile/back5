if($this->get_request_method() != "GET") $this->response('',406);

$sql_ads = "SELECT * FROM tbl_ads";
$sql_ads_status = "SELECT * FROM tbl_ads_status";

$ads = $this->get_one_result($sql_ads);
$ads_status = $this->get_one_result($sql_ads_status);

$respon = array(
    'status' => 'ok', 'ads' => $ads, 'ads_status' => $ads_status
);
$this->response($this->json($respon), 200); 