<?php

/* -------------------- USER ----------------------- */

Route::get('/registers', 'UserController@index')->name('regis');

Route::post('/register-user', 'UserController@post_user')->name('register');

Route::get('/user_managements', 'UserController@get_user')->name('user_management');

Route::get('/edit_user/{id}', 'UserController@edit_user')->name('edit_user');

Route::post('/update_users', 'UserController@update_user')->name('update_user');

Route::post('/delete_users', 'UserController@delete_user')->name('delete_user');

Route::post('/search_nric', 'UserController@checking')->name('checking');

Route::get('/search_nric', 'UserController@index')->name('checking');

