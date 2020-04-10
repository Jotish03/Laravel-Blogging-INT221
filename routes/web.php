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

Route::get('/welcome', function () {
    return view('welcome');
});

//From Here

Route::get('/about',function (){
    return view('pages.about');
});

//Dynamic Routing through URL

Route::get('/users/{id}/{name}',function($id,$name){

    return 'Hey '.$name.' your id is '.$id;
});

//PagesController using controller
Route::get('/','PagesController@index');
Route::get('/about','PagesController@about');
Route::get('/service','PagesController@service');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//resources direct
Route::resource('posts','PostsController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
