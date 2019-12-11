<?php
Route::group(['namespace'=>'NewClaim'],function () {
    Route::get('/noticeod', 'NoticeOdController@index');
    //Route::post('/employerdetails_od', 'CommonController@postEmployer');
    //Route::post('/updmc', 'NoticeOdController@UpdMC');
    //Route::post('/bankinformation_od', 'NoticeOdController@postBankInfo');
    //Route::post('/wagesdetails_od', 'NoticeOdController@postWages');
    Route::post('/odinfo', 'NoticeOdController@postOdinfo');
    Route::post('/odemphistory', 'NoticeOdController@postOdEmphistory');
    // Route::post('/odpreview', 'NoticeOdController@Preview')->name('odpreview');
    Route::get('/dynamic_options/{statecode}', 'NoticeOdController@index');
    Route::post('odpreview', 'NoticeOdController@index')->name('odpreview');
    /* ---------------------------END OF NOTICE OD(PK) ------------------------------- */

    /* --------------------------- NOTICE OD(SCO) ------------------------------------ */
    Route::get('/noticeod_sco', 'NoticeOdController@indexSCO');
    /* ------------------------ END OF NOTICE OD(IO) ---------------------------------- */

    /* --------------------------- NOTICE OD(IO) ------------------------------------ */
    Route::get('/noticeod_io', 'NoticeOdController@indexIO');
    /* ------------------------ END OF NOTICE OD(IO) ---------------------------------- */

    /* --------------------------- NOTICE OD(SAO) ------------------------------------ */
    Route::get('/noticeod_sao', 'NoticeOdController@indexSAO');
    /* ------------------------ END OF NOTICE OD(SAO) ---------------------------------- */


});
Route::group(['namespace'=>'Revision'],function () {
    Route::get('/revisionprovisional_sco', 'ProvisionalController@index_SCO');
    Route::get('/revisionprovisional_sao', 'ProvisionalController@index_SAO');
    Route::get('/revisionchangedate', 'ChangeDateODController@index');
    Route::get('/revisionchangedate_sco', 'ChangeDateODController@index_SCO');
    Route::get('/revisionchangedate_io', 'ChangeDateODController@index_IO');
    Route::get('/revisionchangedate_sao', 'ChangeDateODController@index_SAO');
    Route::get('/revisionmedical_pk','MedicalController@index_pk');
    Route::get('/revisionmedical_sco','MedicalController@index_sco');
    Route::get('/revisionmedical_io','MedicalController@index_io');
    Route::get('/revisionmedical_sao','MedicalController@index_sao');
    Route::get('/revisionassess_sco', 'AssessmentController@indexRevisionSCO');
    Route::get('/revisionassess_sao', 'AssessmentController@indexRevisionSAO');
    Route::get('/revisionels', 'ElsController@index');
    Route::get('/revisionels_sco', 'ElsController@indexEls');
    Route::get('/revisionels_io', 'ElsController@indexElsIO');
    Route::get('/revisionels_sao', 'ElsController@indexElsSao');


});

Route::group(['namespace'=>'Others'],function () {

    Route::get('/noic', 'NoIcController@index');
    Route::get('/noic_sco', 'NoIcController@index_SCO');
    Route::get('/noic_sao', 'NoIcController@index_SAO');
});
?>
