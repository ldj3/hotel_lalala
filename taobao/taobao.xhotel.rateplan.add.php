<?php
header("Content-type:text/html; charset=utf-8");
include "TopSdk.php";
include "config.php";
//酒店产品库rateplan添加//未
$c = new TopClient;
$c->appkey = appkey;
$c->secretKey = secret;
$sessionKey = sessionKey;
$req = new XhotelRateplanAddRequest;
$req->setRateplanCode("13243325fdgf");
$req->setName("全额预付+有早");
$req->setPaymentType("1");
$req->setBreakfastCount("1");
$req->setCancelPolicy("{\"cancelPolicyType\":1}|{\"cancelPolicyType\":2}|{\"cancelPolicyType\":4,\"policyInfo\":{\"48\":10,\"24\":20}}|{\"cancelPolicyType\":5,\"policyInfo\":{\"timeBefore\":6}}|{\"cancelPolicyType\":6,\"policyInfo\":{\"14\":1}}");
$req->setStatus("1");
$req->setHid("31327844568");
$req->setRid("31327844568_3");
$resp = $c->execute($req, $sessionKey);

echo json_encode($resp,JSON_UNESCAPED_UNICODE);