<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

// Route::get('hello',function(){
//     return  '<html><body><h1>hello</h1><p>this is sample page</p1></body></html>';
// });

// Route::get('hello/{id?}/{pass?}','HelloController@index');
// Route::get('hello','HelloController');  //__invokeの場合は@以下をつける必要はない
Route::get('hello','HelloController@index');