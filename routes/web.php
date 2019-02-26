<?php

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
    //return view('welcome');
});

Route::get('/about', function () {
    return view('about');
    //return view('welcome');
});
Route::get('/home', function () {
    return view('home');
    //return view('welcome');
});

//Lo que irá a en la dirección url
Route::get('/route', function () {
    return view('contact');
    //return view('welcome');
});