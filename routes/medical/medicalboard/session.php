<?php 

Route::get('/session', 'MedicalBoard\SessionMedicalController@index')->name('session');

// 6/12/2019
Route::get('/getchairmanattendance/{id}/{date?}/{session?}', 'MedicalBoard\SessionMedicalController@getChairmanAttendance')->name('chairman.attendance');
Route::get('/getpanelattendance/{id}/{date?}/{session?}', 'MedicalBoard\SessionMedicalController@getPanelAttendance')->name('panel.attendance');
Route::get('/gethaattendance/{id}', 'MedicalBoard\SessionMedicalController@getHaAttendance')->name('ha.attendance');