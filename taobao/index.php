<?php
include "TopSdk.php";

$url = 'https://oauth.taobao.com/token';
$postfields= array(
'grant_type'=>'authorization_code',
'client_id'=>'24665963',//等同于appkey
'client_secret'=>'072d0a262bd8c7440abb9a0d7f074157',//等同于appsecret
'code'=>'vz0m1nsm9dL8EheTCTFCYngQ629298',
'redirect_uri'=>'http://ceshi.liuzhangcun.com'//回调URL
);
$post_data = '';

foreach($postfields as $key=>$value){
    $post_data .="$key=".urlencode($value)."&";}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt ($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt ($ch, CURLOPT_SSL_VERIFYHOST, 0);

//指定post数据
curl_setopt($ch, CURLOPT_POST, true);

//添加变量
curl_setopt($ch, CURLOPT_POSTFIELDS, substr($post_data,0,-1));
$output = curl_exec($ch);
$httpStatusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
echo $httpStatusCode;
curl_close($ch);
var_dump($output);