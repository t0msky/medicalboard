<?php

/* -------------------- Parameter ----------------------- */

Route::get('/parameter_managements', 'ParameterController@get_parameter')->name('parameter_management');

Route::get('/create_parameters', function () {
    return view('user_admin.Parameter.CreateParameter');
})->name('parameter');

Route::get('/parameter_managements', 'ParameterController@get_param')->name('parameter_management');

Route::post('/create_parameters', 'ParameterController@post_param')->name('create_parameter');

Route::get('/edit_parameters/{id}', 'ParameterController@edit_param')->name('edit_parameter');

Route::post('/update_parameters', 'ParameterController@update_param')->name('update_parameter');

Route::post('/delete_parameter', 'ParameterController@delete_param')->name('delete_parameter');
