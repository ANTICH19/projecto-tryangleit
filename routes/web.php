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
    return view('pages.home', ['color'=>'#0F1729','header'=>0,'footer'=>1]);
});
Route::get('/', function (){
    return view('pages.home', ['color'=>'#0F1729', 'header'=>0,'footer'=>1]);
});


/*Page Blog*/
Route::get('/blog', function (){
    return view('pages.blog',['color'=>'#0F1729','header'=>0,'footer'=>1]);
});

/*Page About*/
Route::get('/about', function (){
    return view('pages.about',['color'=>'#0F1729','header'=>0,'footer'=>1]);
});

/*Page Services*/
Route::get('/services', function (){
    return view('pages.services', ['color'=>'#0F1729','header'=>2,'footer'=>1]);
});

/*Page Portfolio*/
Route::get('/portfolio', function (){
    return view('pages.portfolio',['color'=>'#0F1729','header'=>2,'footer'=>1]);
});
/*Page Login*/
Route::get('/client', function (){
    return view('pages.login',['color'=>'#0F1729','header'=>1,'footer'=>2]);
});
/*Page Home client*/
Route::get('/home_client', function (){
    return view('/master/client_master');
});
/*Page Home_client_albums*/
Route::get('/home_client_albums', function (){
    return view('/pages/client_albums');
});
/*Page Home_client_gallery's*/
Route::get('/home_client_gallery', function (){
    return view('/pages/client_gallery');
});
