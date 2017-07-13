<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\ApiController; //引用自己定义的api公共类
use Illuminate\Http\Request;            //接收传参使用 function(Request $request,$id=1)
use Illuminate\Support\Facades\Input;   //接收传参使用 $someInput = Input::all();

class TestController extends ApiController
{
    //获取get过来的用户id
    public function index(){
        echo 111;
        // $users = DB::select('select * from m_userinfo where id = ?', [$id]);
        //print_r($users);
        //$someInput = $request->input('id');
//        $someInput = Input::all();
//        var_dump($someInput);
    }
}
