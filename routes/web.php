<?php

Route::get('/','LoginController@index');
Route::any('check','LoginController@check');
Route::any('login_success','LoginController@ura');
Route::any('logout','LoginController@logout');