<?php

/* -------------------- Branch ----------------------- */

Route::get('/create_branchs', 'BranchController@index')->name('branch');

Route::get('/branch_managements', 'BranchController@get_branch')->name('branch_management');

Route::post('/create_branchs', 'BranchController@post_branch')->name('create_branch');

Route::get('/Edit_Branch/{id}', 'BranchController@edit_branch')->name('edit_branch');

Route::post('/update_branchs', 'BranchController@update_branch')->name('update_branch');

Route::post('/delete_branch', 'BranchController@delete_branch')->name('delete_branch');
