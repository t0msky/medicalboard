<?php

Route::get('/takwim', 'MedicalBoard\AnnualAgendaMedicalController@index')->name('takwim');

Route::get('/takwim/hospital_address/{id}', 'MedicalBoard\AnnualAgendaMedicalController@getHospitalAddress');
Route::get('/takwim/statecode/{id}', 'MedicalBoard\AnnualAgendaMedicalController@getStateCode');

Route::get('/takwim/annualAgendaCalendar/{id}/{mb_category?}', 'MedicalBoard\AnnualAgendaMedicalController@getAnnualAgendaCalendar');
Route::get('/takwim/annualAgenda/{id}/{year?}/{mb_category?}', 'MedicalBoard\AnnualAgendaMedicalController@getAnnualAgenda');

Route::get('/takwim/getSpeciality/{id}', 'MedicalBoard\AnnualAgendaMedicalController@getSpeciality');
Route::get('/takwim/getPublicHoliday/{id}', 'MedicalBoard\AnnualAgendaMedicalController@getPublicHoliday');
Route::get('/takwim/getPanel/{id}', 'MedicalBoard\AnnualAgendaMedicalController@getPanel');
Route::get('/takwim/checkDiscipline', 'MedicalBoard\AnnualAgendaMedicalController@checkDiscipline');

// 23/10/2019
Route::get('/takwim/getChairman/{id}', 'MedicalBoard\AnnualAgendaMedicalController@getChairman');
Route::get('/takwim/getSecretariat/{id}', 'MedicalBoard\AnnualAgendaMedicalController@getSecretariat');

Route::post('/takwim', 'MedicalBoard\AnnualAgendaMedicalController@store')->name('takwim.post');
Route::post('/takwim/update', 'MedicalBoard\AnnualAgendaMedicalController@updateAnnualAgenda')->name('takwim.update');
Route::post('/takwim/destroy', 'MedicalBoard\AnnualAgendaMedicalController@deleteAnnualAgenda')->name('takwim.delete');
Route::post('/takwim/duplicate', 'MedicalBoard\AnnualAgendaMedicalController@duplicateAnnualAgenda')->name('takwim.duplicate');