<?php

// Route::get('/information', 'MedicalBoard\InformationMedicalController@index')->name('information');

//added by ifa 4/11/2019
Route::get('/information/huk', 'MedicalBoard\InformationMedicalController@index')->name('information_huk');
//added by ayu 4/11/2019
Route::get('/information/ilat', 'MedicalBoard\InformationMedicalController@index')->name('information_ilat');
// 04/11/2019 Wani
Route::get('/information/od', 'MedicalBoard\InformationMedicalController@index')->name('information_od');

//add by ifa 14/11/2019
Route::post('/reviewcase', 'MedicalBoard\InformationMedicalController@postReviewCase')->name('review_case.post');
//add by wani 20/11/2019
Route::post('/updatembobdetails', 'MedicalBoard\InformationMedicalController@updateMbObdetails')->name('updatembobdetails.post');
Route::get('/getfeedbacknquery', 'MedicalBoard\InformationMedicalController@getFeedbacknquery')->name('getfeedbacknquery.get');
