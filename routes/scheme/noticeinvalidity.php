<?php
Route::group(['namespace'=>'NewClaim'], function () {
    
    Route::get('noticeinvalidity', 'NoticeInvalidityController@index')->name('noticeilat');
   
    
    Route::post('ilatinfo', 'NoticeInvalidityController@postIlat_info')->name('ilatinformation');
    Route::post('ilatpreview', 'NoticeInvalidityController@index')->name('ilatpreview');
    Route::post('wages', 'NoticeInvalidityController@postWages')->name('update_wages');
    Route::post('finalSubmit', 'CommonController@postFinalSubmit')->name('finalsubmit');
    
    /* ---------------------------- NOTICE ILAT(SCO) ------------------------------------- */
    Route::post('/WrongNoticeType', 'NoticeInvalidityController@postWrongNoticeType')->name('wrong_notice_type');
    Route::get('/generateLetter', 'NoticeInvalidityController@getGenerateLetter')->name('generate_letter');

    /* ----------------------------END OF NOTICE ILAT(SCO) -------------------------------- */
});

Route::group(['namespace'=>'Revision'], function () {
    Route::get('/revisioninvalidity', 'InvalidityController@index_PK');
    Route::get('/revisioninvalidity_sco', 'InvalidityController@index_SCO');
    Route::get('/revisioninvalidity_sao', 'InvalidityController@index_SAO');

    Route::get('/revisionbankruptcy', 'BankruptcyController@index_PK');
    Route::get('/revisionbankruptcy_sco', 'BankruptcyController@index_SCO');
    Route::get('/revisionbankruptcy_sao', 'BankruptcyController@index_SAO');

    Route::get('/revisionsection96', 'Section96Controller@index_PK');
    Route::get('/revisionsection96_sco', 'Section96Controller@index_SCO');
    Route::get('/revisionsection96_sao', 'Section96Controller@index_SAO');

    Route::get('/revisionreemployment', 'ReemploymentController@index_PK');
  
    Route::get('/revisionpaymentoption', 'PaymentOptionController@index_PK');
    Route::get('/revisionpaymentoption_sao', 'PaymentOptionController@index_SAO');
    Route::get('/revisionpaymentoption_sco', 'PaymentOptionController@index_SCO');
});

Route::group(['namespace'=>'Others'], function () {
    Route::get('/permanentrepresentatives', 'PermanentrepresentativesController@index_PK');
    Route::get('/permanentrepresentatives_sco', 'PermanentrepresentativesController@index_SCO');
    Route::get('/permanentrepresentatives_io', 'PermanentrepresentativesController@index_IO');
    Route::get('/permanentrepresentatives_sao', 'PermanentrepresentativesController@index_SAO');
    Route::get('/permanentrepresentatives_akd', 'PermanentrepresentativesController@index_AKD');
    Route::get('/permanentrepresentatives_hof', 'PermanentrepresentativesController@index_HOF');
    Route::get('/permanentrepresentatives_hol', 'PermanentrepresentativesController@index_HOL');
    Route::get('/permanentrepresentatives_pkdis', 'PermanentrepresentativesController@index_PKDIS');
});
