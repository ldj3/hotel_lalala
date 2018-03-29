<?php

namespace App\Admin\Controllers;

use App\Http\Controllers\Controller;
use Encore\Admin\Controllers\ModelForm;

class TaobaoController extends Controller
{
    use ModelForm;

    public function test(){
        require_once "../taobao/TopSdk.php";
        require_once "../taobao/config.php";

        $c = new \TopClient;
        $c->appkey = appkey;
        $c->secretKey = secret;
        $sessionKey = sessionKey;
        $req = new \XhotelGetRequest;

        $req->setHid("31327844568");
        $resp = $c->execute($req, $sessionKey);
        echo json_encode($resp,JSON_UNESCAPED_UNICODE);
    }


}