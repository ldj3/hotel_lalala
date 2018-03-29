<?php
header("Content-type:text/html; charset=utf-8");
include "TopSdk.php";
include "config.php";
//酒店查询接口
$c = new TopClient;
$c->appkey = appkey;
$c->secretKey = secret;
$sessionKey = sessionKey;
$req = new XhotelGetRequest;
//$req->setHid("7211672554");
$req->setHid("31327844568");
//$req->setVendor("qiuxin");
$resp = $c->execute($req, $sessionKey);

echo json_encode($resp,JSON_UNESCAPED_UNICODE);