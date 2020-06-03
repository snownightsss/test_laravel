<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

global $head,$style,$bosy,$end;
$head = '<html><head>';
$style = <<<EOF
<style>
body{font-size:16pt; color:#999; }
h1{font-size:100pt; text-alighn:right; color:#eee;
    margin:-40px 0px -50px 0px;}
</style>
EOF;
$body = '</head></body>';
$end = '</body></head>';

function tag($tag,$txt){
    return "<{$tag}>" . $txt . "</{$tag}>";
}

class HelloController extends Controller
{
    // public function __invoke(){ //シングルアクションコントローラ p50
    //     global $head,$style,$body,$end;

    //     $html = $head . tag('title','Hello/Index') . $style . $body
    //     . tag('h1','Index') . tag('p', 'this is Index page')
    //     . '<p>これはシングルアクションコントローラのアクションです </p>' . $end;
    //     return $html;
    // }

    // public function index(){
    //     global $head,$style,$body,$end;

    //     $html = $head . tag('title','Hello/Index') . $style . $body
    //     . tag('h1','Index') . tag('p', 'this is Index page')
    //     . '<a href ="/hello/other">go to other page </a>' . $end;
    //     return $html;
    // }

    // public function other(){
    //     global $head,$style,$body,$end;
        
    //     $html = $head . tag('title','Hello/ohter') . $style . $body
    //     . tag('h1','ohter') . tag('p', 'this is ohter page') . $end;
    // }

    public function index(Request $request, Response $response){ //リクエストとレスポンス　p53
        global $head,$style,$body,$end;

        $html = $head . tag('title','Hello/Index') . $style . $body . tag('h1','Hello')
        . tag('h3','Request') . '<pre>' . $request->path() . '</pre>' . tag('h3','Response') . '<pre>' . $response->content() . '</pre>' . $end;
        $response->setContent($html);
        return $response;
    }
}
