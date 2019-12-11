<?php

/* -------------------- Role ----------------------- */

Route::get('/create_roles', function () {
    return view('user_admin.Role&Access.CreateRole&Access');
})->name('role');

Route::get('/role_managements', 'RolenaccessController@get_role')->name('role_management');

Route::post('/create_roles', 'RolenaccessController@post_role')->name('create_role');

Route::get('/edit_roles/{id}', 'RolenaccessController@edit_role')->name('edit_role');

Route::post('/update_role', 'RolenaccessController@update_role')->name('update_role');

Route::post('/deletes', 'RolenaccessController@delete_role')->name('delete_role');

