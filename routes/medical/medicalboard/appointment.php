<?php

Route::get('/set_appt', 'MedicalBoard\AppointmentMedicalController@index')->name('set_appt');
Route::get('/getappointmentlisting/{id}/{date?}/{idno?}/{name?}', 'MedicalBoard\AppointmentMedicalController@getAppointmentListing')->name('appt_listing');
Route::get('/getappointment/{id}/{mbcategory?}', 'MedicalBoard\AppointmentMedicalController@getAppointment')->name('appointment.get');
Route::get('/getApptPerOb/{hospital_id?}/{mb_category?}/{year?}','MedicalBoard\InformationMedicalController@getApptDetailsPerOb')->name('getApptPerOb.get');
Route::get('/setapptperob','MedicalBoard\InformationMedicalController@setApptPerob')->name('setapptperob.post');

Route::post('/reschedule_appt', 'MedicalBoard\AppointmentMedicalController@rescheduleAppointment')->name('reschedule_appt');