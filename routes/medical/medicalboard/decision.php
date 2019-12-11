<?php

Route::get('/decision_jd_huk','MedicalBoard\DecisionMedicalController@index')->name('decision_jd_huk');

//Date add:27-9-19
Route::get('/decision_jd_ilat','MedicalBoard\DecisionMedicalController@jd_ilat')->name('decision_jd_ilat');
Route::get('/decision_rayuan_huk','MedicalBoard\DecisionMedicalController@jd_rayuan_huk')->name('decision_rayuan_huk');
Route::get('/decision_rayuan_od','MedicalBoard\DecisionMedicalController@jd_rayuan_od')->name('decision_rayuan_od');

//Date add:4-10-2019
Route::get('/huk_seksyen32','MedicalBoard\DecisionMedicalController@huk_seksyen32')->name('huk_seksyen32');

//Date add 16-10-2019
Route::get('/preview_huk','MedicalBoard\DecisionMedicalController@preview_huk')->name('preview_huk');

//Date add 18-10-2019
Route::get('/tnc_ilat','MedicalBoard\DecisionMedicalController@tnc_ilat')->name('tnc_ilat');
Route::get('/success', 'MedicalBoard\DecisionMedicalController@successPK')->name('success');