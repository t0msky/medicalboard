<?php

Route::group(['prefix' => 'workflowtype'], function () {
	Route::get('/', 'WorkflowTypeController@index')->name('workflowtype_list');
	Route::get('/create', 'WorkflowTypeController@create')->name('workflowtype_create');
	Route::get('/create/{id}', 'WorkflowTypeController@create')->name('workflowtype_update');
	Route::post('/save', 'WorkflowTypeController@save')->name('workflowtype_save');
	Route::post('/delete', 'WorkflowTypeController@delete')->name('workflowtype_delete');
});

Route::group(['prefix' => 'status'], function () {
	Route::get('/', 'StatusController@index')->name('status_list');
	Route::get('/create', 'StatusController@create')->name('status_create');
	Route::get('/create/{id}', 'StatusController@create')->name('status_update');
	Route::post('/save', 'StatusController@save')->name('status_save');
	Route::post('/delete', 'StatusController@delete')->name('status_delete');
});

Route::group(['prefix' => 'statussub'], function () {
	Route::get('/', 'StatusSubController@index')->name('statussub_list');
	Route::get('/create', 'StatusSubController@create')->name('statussub_create');
	Route::get('/create/{id}', 'StatusSubController@create')->name('statussub_update');
	Route::post('/save', 'StatusSubController@save')->name('statussub_save');
	Route::post('/delete', 'StatusSubController@delete')->name('statussub_delete');
});

Route::group(['prefix' => 'workflow'], function () {
	Route::get('/', 'WorkflowController@index')->name('workflow_list');
	Route::get('/create', 'WorkflowController@create')->name('workflow_create');
	Route::get('/create/{id}', 'WorkflowController@create')->name('workflow_update');
	Route::post('/save', 'WorkflowController@save')->name('workflow_save');
	Route::post('/delete', 'WorkflowController@delete')->name('workflow_delete');
});