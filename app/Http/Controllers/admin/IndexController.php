<?php

namespace App\Http\Controllers\admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;
use Illuminate\Support\Facades\Redis;
use App\Jobs\trade;


class IndexController extends Controller
{
    public function index(){
//        $data = DB::table('order')->get()->toArray();
//    var_dump($data);
//        $data = DB::table('ceshi')->get()->toArray();
//        $arr = [];
//        if($data){
//            foreach ($data as $key => $value){
//                $arr[$value->id] = $value->name;
//            }
//        }
////        Redis::set('ceshi_name',json_encode($arr,JSON_UNESCAPED_UNICODE));
//        var_dump(Redis::get('ceshi_name'));

        var_dump(1);

    }

    public function trade(){
        $data = [
            'tid' => uniqid(),
            'name' => '无望2',
            'address' => 'beijing'
        ];

        $obj = new trade($data);
        $res = $obj->dispatch($obj)->onQueue('trade');
//        var_dump($res);
        return '订单的方法';

    }
}
