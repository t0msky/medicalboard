<?php

/* -------------------- Chairman ----------------------- */

// Route::get('/manage_chairman', function () {
//     return view('user_admin.User.ChairmanManagement');
// })->name('chairman_manage');

Route::get('/create_chairmans', 'ChairmanController@index')->name('chairman');

Route::post('/create_chairmans', 'ChairmanController@post_chairman')->name('create_chairman');

Route::get('/chairmans_management', 'ChairmanController@get_chairman')->name('chairman_manage');

Route::get('/edit_chairman/{id}', 'ChairmanController@edit_chairman')->name('edit_chairman');

Route::post('/update_chairmans', 'ChairmanController@update_chairman')->name('update_chairman');

Route::post('/delete_cairmans', 'ChairmanController@delete_chairman')->name('delete_chairman');

Route::get('/search_nric_chairman', 'ChairmanController@index')->name('checking_chairman');




