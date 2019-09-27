<?php

use Illuminate\Http\Request;

Route::group(['prefix' => '/v1'], function () {

	Route::get('/players','Api\v1\PlayerController@index');
	Route::get('/players/{player}','Api\v1\PlayerController@show');
	Route::get('/coaches','Api\v1\UserController@index');
	Route::get('/coaches/{user}','Api\v1\UserController@show');

});