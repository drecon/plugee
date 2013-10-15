<?php

Route::get('/', 'LoginController@index');
Route::get('login', 'LoginController@index');
Route::any('login/index', 'LoginController@index');
Route::post('login/checking', 'LoginController@checking');

Route::get('home', 'HomeController@index');

Route::get('logout', 'AuthController@logout');
