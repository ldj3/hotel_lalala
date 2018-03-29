<?php
header("Content-type:text/html; charset=utf-8");
include "TopSdk.php";
include "config.php";
//添加酒店或更新酒店
$c = new TopClient;
$c->appkey = appkey;
$c->secretKey = secret;
$sessionKey = sessionKey;
$req = new XhotelAddRequest;
$req->setOuterId("12345800");
$req->setName("广州800连锁公寓新天地店");
$req->setCity("440113");
$req->setAddress("广州市番禺区贝岗村新天地旁");
$req->setTel("18617377493");
//$req->setVendor("qiuxin");
$resp = $c->execute($req, $sessionKey);

echo json_encode($resp,JSON_UNESCAPED_UNICODE);