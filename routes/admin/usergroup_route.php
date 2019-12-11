<?php

/* -------------------- USER GROUP ----------------------- */

Route::get('/register_usergroups', function () {
    return view('user_admin.UserGroup.CreateUserGroup');
})->name('usergroup');

Route::get('/usergroup_managements', function () {
    return view('user_admin.UserGroup.Management');
})->name('usergroup_management');

Route::get('/update_usergroups', function () {
    return view('user_admin.UserGroup.UpdateUserGroup');
})->name('update_usergroup');
