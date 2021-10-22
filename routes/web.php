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
/*Page Home*/
Route::get('/home', function (){
    return view('pages.home', ['color'=>'#0F1729','i'=>0]);
});
Route::get('/', function (){
    return view('pages.home', ['color'=>'#0F1729', 'header_color'=>'blue']);
});


/*Page Blog*/
Route::get('/blog', function (){
    return view('pages.blog',['color'=>'#0F1729','i'=>0]);
});

/*Page About*/
Route::get('/about', function (){
    return view('pages.about',['color'=>'#0F1729','i'=>0]);
});

/*Page Services*/
Route::get('/services', function (){
    return view('pages.services', ['color'=>'#0F1729','i'=>2]);
});

/*Page Portfolio*/
Route::get('/portfolio', function (){
    return view('pages.portfolio',['color'=>'#0F1729','i'=>2]);
});


