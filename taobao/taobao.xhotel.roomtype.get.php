<?php
header("Content-type:text/html; charset=utf-8");
include "TopSdk.php";
include "config.php";
//房型查询接口
$c = new TopClient;
$c->appkey = appkey;
$c->secretKey = secret;
$sessionKey = sessionKey;
$req = new XhotelRoomtypeGetRequest;
$req->setOuterId("31327844568_3");
//$req->setVendor("qiuxin");
$resp = $c->execute($req, $sessionKey);

echo json_encode($resp,JSON_UNESCAPED_UNICODE);