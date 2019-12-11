<?php

Route::group(['namespace'=>'NewClaim'], function () {
    Route::get('huk', 'HUKController@index');
    Route::get('huk_sco', 'HUKController@index_sco');
    Route::get('huk_sco_after', 'HUKController@index_sco1');
    Route::get('huk_io', 'HUKController@index_io');
    Route::get('huk_io_after', 'HUKController@index_io1');
    Route::get('huk_sao', 'HUKController@index_sao');
    Route::get('huk_sao_after', 'HUKController@index_sao1');
    // Route::post('/noticetypehuk', 'HUKController@noticeType')->name('noticetypehuk');
    Route::get('/noticetypehuk', function () {
        return view('scheme.HUK.general.notice_type_huk');
    });
    // Route::get('huk_sco_after', 'HUKController@index_sco');
});