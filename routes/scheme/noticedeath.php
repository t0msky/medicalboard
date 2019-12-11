<?php
Route::group(['namespace'=>'NewClaim'],function () {
    // Route::post('/noticedeath', 'CommonController@postObForm');
    Route::post('/employerDetails_death', 'CommonController@postEmployer');
    Route::post('/deathinfo', 'NoticeDeathController@postDeath')->name('deathinfo');
    Route::post('/confirmation_death', 'NoticeDeathController@postConfirmation');
    Route::get('/noticedeath', 'NoticeDeathController@index');
    Route::post('/applicantinfo', 'NoticeDeathController@postApplicantInfo');
    Route::post('/wagesdetails_death', 'NoticeDeathController@postWages');
    Route::post('/bankinformation_death', 'NoticeDeathController@postBankInfo');
    Route::post('/otinfo', 'NoticeDeathController@postOtInfo');
    Route::post('deathpreview', 'NoticeDeathController@index')->name('deathpreview');

    Route::get('/reftable/{accdwhen}', 'NoticeDeathController@getaccwhen');
    Route::get('/reftable1/{suboccucode}', 'NoticeDeathController@getsuboccucode');

    Route::post('/confirmation', 'NoticeDeathController@getPreview')->name('confirmation.death');
    Route::post('/post_fpminfo', 'NoticeDeathController@postFpmInfo')->name('post_fpminfo');//zik
    Route::get('/getfpminfo', 'NoticeDeathController@getFpmInfo')->name('getfpminfo');//zik
    Route::post('/del_fpminfo', 'NoticeDeathController@deleteFpmInfo')->name('del_fpminfo');//zik
    Route::get('/updatefpminfo', 'NoticeDeathController@updatefpminfo')->name('updatefpminfo');//zik

    // Anis
    // Route::post('/guardianinfo', 'NoticeDeathController@postGuardianInfo');
    // Route::get('/guardianinfo', 'NoticeDeathController@index');

    //--PK--//
    Route::post('/otinfo','NoticeDeathController@postOtInfo')->name('postOtInfo'); //anis
    Route::get('/getOtGuardianotbankinfo', 'NoticeDeathController@getOtGuardianotbankinfo')->name('getOtGuardianotbankinfo');//anis
    Route::get('/getGuardian','NoticeDeathController@getGuardian')->name('getGuardian');//anis
    Route::delete('/delete_ot/{id}','NoticeDeathController@delete_ot')->name('delete_ot');//anis

    //--IO--//
    Route::post('/postDoubtfulInfo','NoticeDeathController@postDoubtfulInfo')->name('postDoubtfulInfo'); //anis

    Route::post('/postInconsistentInfo','NoticeDeathController@postInconsistentInfo')->name('postInconsistentInfo'); //anis
    Route::get('/getInconsistenItem','NoticeDeathController@getInconsistenItem')->name('getInconsistenItem'); //anis


    /* ------------------------------ END OF NOTICE DEATH(PK) --------------------------------- */

    /* ------------------------------ NOTICE DEATH -- SCO ------------------------------------- */
    Route::get('/noticedeath_sco', 'NoticeDeathController@index');
    Route::get('/noticedeath_sco_spi', 'NoticeDeathController@indexSCO_spi');
    /* ------------------------- END OF NOTICE DEATH -- SCO ------------------------------------- */

    /* ---------------- NOTICE DEATH -- IO-------------------- */
    Route::get('/noticedeath_io', 'NoticeDeathController@indexIO');
    /* ------------------------- END OF NOTICE DEATH -- IO ------------------------------------- */

    /* ------------------------------- NOTICE DEATH -- SAO -------------------------------------- */
    Route::get('/noticedeath_sao', 'NoticeDeathController@indexSAO');

    //--PK--//
    Route::get('/getGuardianInfo','NoticeDeathController@getGuardianInfo')->name('getGuardianInfo'); //anis
    Route::get('/getOtInfo','NoticeDeathController@getOtInfo')->name('getOtInfo'); //anis
    Route::post('/otinfo','NoticeDeathController@postOtInfo')->name('postOtInfo'); //anis
    Route::get('/getOtGuardianotbankinfo', 'NoticeDeathController@getOtGuardianotbankinfo')->name('getOtGuardianotbankinfo');//anis
    Route::get('/getGuardian','NoticeDeathController@getGuardian')->name('getGuardian');//anis
    // Route::delete('/delete_ot/{id}','NoticeDeathController@delete_ot')->name('delete_ot');//anis
    Route::post('/delete_ot','NoticeDeathController@delete_ot')->name('delete_ot');//anis

    //--IO--//
    Route::post('/postInconsistentInfo','NoticeDeathController@postInconsistentInfo')->name('postInconsistentInfo'); //anis
    Route::get('/getInconsistenItem','NoticeDeathController@getInconsistenItem')->name('getInconsistenItem'); //anis

});
Route::group(['namespace'=>'Revision'],function () {
    Route::get('/revisiondateofdeath_pk', 'DeathDateController@index');

    
});

Route::group(['namespace'=>'Others'],function () {
  
    
});
?>