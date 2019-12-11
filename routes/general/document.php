<?php
Route::group(['namespace'=>'Letter'], function () {

    Route::post('/Upload', 'DocumentController@upload')->name('claim.upload');
    Route::get('/viewdoc', 'DocumentController@viewstorage');
    Route::get('/download', 'DocumentController@download')->name('download_document');
    Route::get('/viewnonotes', 'DocumentController@viewNonotes')->name('viewNoNotes');
    Route::get('/viewnotes', 'DocumentController@viewnotes')->name('viewNotes');
});
