<?php
header("Content-type:text/html; charset=utf-8");
include "TopSdk.php";
include "config.php";
//酒店产品库rateplan查询
$c = new TopClient;
$c->appkey = appkey;
$c->secretKey = secret;
$sessionKey = sessionKey;
$req = new XhotelRateplanGetRequest;
$req->setRpid("208014065568");
$req->setRateplanCode("31327844568abc123");
//$req->setVendor("taobao");
$resp = $c->execute($req, $sessionKey);

echo json_encode($resp,JSON_UNESCAPED_UNICODE);