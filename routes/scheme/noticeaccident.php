<?php
/* -------------------------- NOTICE ACCIDENT -- NEW CLAIM ----------------------- */
Route::group(['namespace'=>'NewClaim'], function () {
    Route::get('/noticeaccident', 'NoticeAccidentController@index');
    Route::post('/noticeaccident', 'NoticeAccidentController@postAccident')->name('post.accidentinfo');
    Route::post('/HUS', 'NoticeAccidentController@postHusInfo')->name('husinfo');//zik
    Route::get('/editHus/{op_id}', 'NoticeAccidentController@updateHusInfo')->name('edit_husinfo');
    Route::get('/get_wages_contrpayable', 'NoticeAccidentController@getWagesContrpayable')->name('get_wages_contrpayable'); //anis
    Route::post('/accidentpreview', 'NoticeAccidentController@index')->name('accidentpreview');
    Route::post('/success', 'CommonController@postFinalSubmit')->name('finalsubmit');

    /* --------------------------END OF NOTICE ACCIDENT(PK) ------------------------ */
});
/* -------------------------- NOTICE ACCIDENT -- REVISION ----------------------- */
Route::group(['namespace'=>'Revision'], function () {
    /* -------------------------- NOTICE ACCIDENT -- REVISION (Date Of Accident) ----------------------- */
    Route::get('/revisiondateaccident_pk', 'DateAccidentController@index');
    Route::get('/revisiondateaccident_sco', 'DateAccidentController@index_SCO');
    Route::get('/revisiondateaccident_io', 'DateAccidentController@index_IO');
    Route::get('/revisiondateaccident_sao', 'DateAccidentController@index_SAO');

    /* -------------------------- NOTICE ACCIDENT -- REVISION (OB Profile) ----------------------- */
    Route::get('/revisionobprofile_pk', 'OBProfileController@index');
    Route::get('/revisionobprofile_sco', 'OBProfileController@index_SCO');
    Route::get('/revisionobprofile_io', 'OBProfileController@index_IO');
    Route::get('/revisionobprofile_sao', 'OBProfileController@index_SAO');

    /* -------------------------- NOTICE ACCIDENT -- REVISION (Wages) --------------------------- */
    Route::get('/revisionwages_pk', 'WagesController@index');
    Route::get('/revisionwages_sco', 'WagesController@index_SCO');
    Route::get('/revisionwages_sco_spi', 'WagesController@index_SCO_SPI');
    Route::get('/revisionwages_io', 'WagesController@index_IO');
    Route::get('/revisionwages_io_spi', 'WagesController@index_IO_SPI');
    Route::get('/revisionwages_sao', 'WagesController@index_SAO');
    Route::get('/revisionwages_sao_spi', 'WagesController@index_SAO_SPI');

    /* -------------------------- NOTICE ACCIDENT -- REVISION (Reverse Decision) ---------------------- */
    Route::get('/revisionreversedecisionbktobbk_pk', 'ReverseDecisionController@index_bk_to_bbk');
    Route::get('/revisionreversedecisionbktobbk_sco', 'ReverseDecisionController@index_SCO_bk_to_bbk');
    Route::get('/revisionreversedecisionbktobbk_io', 'ReverseDecisionController@index_IO_bk_to_bbk');
    Route::get('/revisionreversedecisionbktobbk_sao', 'ReverseDecisionController@index_SAO_bk_to_bbk');
    Route::get('/revisionreversedecisionnationality_pk', 'ReverseDecisionController@index_nationality');
    Route::get('/revisionreversedecisionnationality_sco', 'ReverseDecisionController@index_SCO_nationality');
    Route::get('/revisionreversedecisionnationality_io', 'ReverseDecisionController@index_IO_nationality');
    Route::get('/revisionreversedecisionnationality_sao', 'ReverseDecisionController@index_SAO_nationality');
    /* ----------------------END OF NOTICE ACCIDENT -- REVISION --------------------------- */
});

Route::group(['namespace'=>'Others'], function () {
    /* -------------------------- NOTICE ACCIDENT -- OTHERS (Bon Ganti Rugi) ---------------------- */
    Route::get('/bgr_pk', 'BGRController@index');
    Route::get('/bgr_sco', 'BGRController@index_SCO');
    Route::get('/bgr_io', 'BGRController@index_IO');
    Route::get('/bgr_sao', 'BGRController@index_SAO');
    /* ----------------------END OF NOTICE ACCIDENT -- OTHERS --------------------------- */
});
