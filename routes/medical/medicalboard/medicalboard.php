<?php 

// 13/09/2019 By Ifa
/*------------------ INFORMATION --------------------------*/

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
//
/*------------------ TAKWIM --------------------------*/

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


/*------------------ APPOINTMENT --------------------------*/

Route::get('/set_appt', 'MedicalBoard\AppointmentMedicalController@index')->name('set_appt');
Route::get('/getappointmentlisting/{id}/{date?}/{idno?}/{name?}', 'MedicalBoard\AppointmentMedicalController@getAppointmentListing')->name('appt_listing');
Route::get('/getappointment/{id}/{mbcategory?}', 'MedicalBoard\AppointmentMedicalController@getAppointment')->name('appointment.get');
Route::get('/getApptPerOb/{hospital_id?}/{mb_category?}/{year?}','MedicalBoard\InformationMedicalController@getApptDetailsPerOb')->name('getApptPerOb.get');
Route::get('/setapptperob','MedicalBoard\InformationMedicalController@setApptPerob')->name('setapptperob.post');

Route::post('/reschedule_appt', 'MedicalBoard\AppointmentMedicalController@rescheduleAppointment')->name('reschedule_appt');

/*------------------ BRIEFCASE & ATTENDANCE --------------------------*/

Route::get('/briefcase', 'MedicalBoard\BriefcaseMedicalController@index')->name('briefcase');
Route::get('/attendance', 'MedicalBoard\SessionMedicalController@index')->name('session');

/*------------------------ ASSESSMENT --------------------------------*/

Route::get('/assessment', 'MedicalBoard\AssessmentMedicalController@index')->name('assessment');
Route::get('/calendar_js','MedicalBoard\AnnualAgendaMedicalController@calendar');


//example for generate PDFS
// Route::get('/pdfExample','MedicalBoard\InformationMedicalController@getPrintPage');

Route::get('/pageViewPDF','MedicalBoard\InformationMedicalController@viewPagePdf');
Route::get('/viewPdf','MedicalBoard\InformationMedicalController@printPdf') ->name('viewPdf');

// -----------------------------DECISION JEMAAH DOKTOR(Ayu)------------------------------------- Date add:25-9-19
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

//----------------------------------SECRETARIAT------------------------------------------------ Date 10-11-2019
Route::get('/secretariat', 'MedicalBoard\AssessmentMedicalController@index')->name('secretariat');
Route::get('/success', 'MedicalBoard\DecisionMedicalController@successPK')->name('success');
