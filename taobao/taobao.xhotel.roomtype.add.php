<?php
header("Content-type:text/html; charset=utf-8");
include "TopSdk.php";
include "config.php";
//房型新增接口
$c = new TopClient;
$c->appkey = appkey;
$c->secretKey = secret;
$sessionKey = sessionKey;
$req = new XhotelRoomtypeAddRequest;
$req->setOuterId("31327844568_3");
$req->setName("总统套房");
$req->setBedType("大床");
$req->setOutHid("12345");
$resp = $c->execute($req, $sessionKey);

echo json_encode($resp,JSON_UNESCAPED_UNICODE);