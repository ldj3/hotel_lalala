<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\DB;
use app\Unionpay;


class UnionpayController extends Controller
{
    public function api_data(Request $request)
    {
        $array_data = $request->all();
        // print_r($array_data['cleandate']);
        if ($array_data['cleandate'] != NULL && $array_data['tradetime'] !=NULL && $array_data['operatetype'] != NULL && $array_data['serialnumber'] != NULL && $array_data['cardnumber'] != NULL && $array_data['tradeamount'] != NULL && $array_data['mercode'] != NULL && $array_data['mername'] != NULL && $array_data['debitfees'] != NULL && $array_data['greditfees'] != NULL && $array_data['paytype'] != NULL) {
            DB::table("admin_unionpay")->insert([
                "cleandate"=>$array_data['cleandate'],
                "tradetime"=>$array_data['tradetime'],
                "operatetype"=>$array_data['operatetype'],
                "serialnumber"=>$array_data['serialnumber'],
                "cardnumber"=>$array_data['cardnumber'],
                "tradeamount"=>$array_data['tradeamount'],
                "terminalcode"=>$array_data['terminalcode'],
                "mercode"=>$array_data['mercode'],
                "mername"=>$array_data['mername'],
                "debitfees"=>$array_data['debitfees'],
                "greditfees"=>$array_data['greditfees'],
                "paytype"=>$array_data['paytype']
            ]);
        }else{
            echo "The values in an array cannot be empty !";
            return false;
        }
    }

    // 接口调试方法
    public function getcar(Request $request)
    {
        return "Hello world！";
    }

    
}
