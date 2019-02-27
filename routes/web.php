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

Route::get('/about', 'PagesController@getAbout');
Route::get('/home', 'PagesController@getHome');

//Lo que irá a en la dirección url
Route::get('/contact', 'PagesController@getContact');
Route::get('/messages', 'MessagesController@getMessages');


Route::post('/contact/submit', 'MessagesController@submit');