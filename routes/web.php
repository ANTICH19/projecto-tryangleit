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

Route::get('/home', function (){
    return view('pages.home', ['color'=>'#0F1729']);
});
Route::get('/blog', function (){
    return view('pages.blog',['color'=>'#F6F5F5']);
});
Route::get('/about', function (){
    return view('pages.about',['color'=>'#0F1729']);
});
Route::get('/services', function (){
    return view('pages.services');
});
Route::get('/post', function (){
    return view('pages.post');
});


