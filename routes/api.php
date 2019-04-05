<?php

use Illuminate\Http\Request;

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['middleware' => ['auth:api']], function() {
    Route::post('/resto', 'RestaurantController@store');
});

Route::post('item/save', 'MenuController@saveMenuItem');