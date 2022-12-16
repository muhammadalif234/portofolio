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
route::get('/navbar',function(){
    return view('frontend.tester');
});

/**
 * routingan disini buat artikel
 */
route::get('/bisnis', function(){
    return view('artikel.bisnisanalis');
});
route::get('/sains',function(){
    return view('artikel.sains');
});
route::get('/sejarah',function(){
    return view('artikel.teknologi');
});
route::get('/teknologi',function(){
    return view('artikel.teknologi');
});

route::get('contact',function(){
    return view('frontend.contact');
});