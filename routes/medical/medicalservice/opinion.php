<?php

    //GET DATA
    // ======== INVESTIGATION : INTERNAL DOCUMENT ===============\\
Route::group(['namespace'=>'Opinion'], function () {

    Route::get('/newcase', 'NewCaseController@index')->name('newcase');

    Route::get('/campaign', 'campaignController@index')->name('moeiAbpppCampaign');

    Route::get('/committee', 'committeeController@index')->name('committee');

    Route::get('/appointment', 'appointmentController@index')->name('appointment');

    Route::get('/reportstatus', 'reportStatusController@index')->name('reportstatus');

    Route::get('/opinionfeedback', 'feedbackController@index')->name('feedback');

    Route::get('/preview', 'investigation\specialreportController@abpp')->name('previewSpecialreport');

    Route::get('/opinion', 'noticeController@index')->name('allNotice');

    
    // POST DATA
    Route::post('/recommend', 'RecommendController@postRecommend')->name('recommend');

    Route::post('/ms_query', 'MsQueryController@postMsQuery')->name('ms_query');

    Route::post('/quotation', 'investigation\specialreportController@postQuotation')->name('quotation');

    Route::post('/newcases', 'NewCaseController@postNewCase')->name('newcases');
    
    Route::post('/set_appointment', 'internaldocumentController@postAppointment')->name('set_appointment');

    Route::post('/set_appointment', 'internaldocumentController@postAppointment')->name('set_appointment');

     // Route::post('/query', 'MsQueryController@postMsQuery')->name('query');

    // Route::post('/quotation', 'QuotationController@postQuotation')->name('quotation');


    //ACPP INVOICE
    Route::post('/invoice', 'InvoiceController@postInvoice')->name('invoice');
});
