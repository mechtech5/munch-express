<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//turbolinks
Route::get('/restos', 'RestaurantController@index')->name('restos');
Route::get('/restos/menu/{id}', 'MenuController@index')->name('restos.menu');
