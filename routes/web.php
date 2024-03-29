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


Route::get('/hello', function(){
    $name = 'Max';
    return view('home',array(
        'name' => $name,
    ));
});

Route::get('/send', function(){
   return view('send');
});

Route::post('getData', function(){
    dd($_POST);
});

Route::get('/main/{slug}', 'App\Http\Controllers\MainController@index');

Route::resource('/posts','App\Http\Controllers\PostController');
