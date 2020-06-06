<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{
    public function index(Request $request)
    {
        // $data = [
        //     ['name'=>'山田太郎','mail'=>'taro@yamada'],
        //     ['name'=>'田中はなこ','mail'=>'hanako@flower'],
        //     ['name'=>'鈴木さちこ','mail'=>'sachiko@happy'],
        // ];
        // return view('hello.index',['data'=>$data]);
        return view('hello.index',['message'=>'Hello']);
    }
    public function post(Request $request)
    {
        // $msg = $request->msg;
        // $data = [
        //     'msg' => $msg,
        // ];
        return view('hello.index',['msg'=>$request->msg]);
    }
}
