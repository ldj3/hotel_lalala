<?php
header("Content-type:text/html; charset=utf-8");
include "TopSdk.php";
include "config.php";
//酒店房型与房价查询
$c = new TopClient;
$c->appkey = appkey;
$c->secretKey = secret;
$sessionKey = sessionKey;
$req = new XhotelBaseinfoRoomGetRequest;
$req->setOutHid("31327844568");
$req->setIsNeedRatePlan("true");
$resp = $c->execute($req, $sessionKey);

echo json_encode($resp,JSON_UNESCAPED_UNICODE);