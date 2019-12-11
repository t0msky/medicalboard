<?php

Route::group(['prefix' => 'statement'], function () {
	Route::get('/', 'StatementController@index')->name('statement_list');
	Route::post('/create', 'StatementController@create');
	Route::get('/view/{caserefno}/{id}', 'StatementController@view');
	Route::get('/download', 'StatementController@download')->name('statement_download');
	Route::post('/upload', 'StatementController@upload')->name('statement_upload');
});