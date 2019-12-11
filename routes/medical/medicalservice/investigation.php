<?php

    Route::group(['namespace'=>'Investigation'], function () {

    Route::get('/internalappointment', 'internaldocController@abpppmoei')->name('internaldocabppp');

    Route::get('/internal', 'internaldocController@abpppmoei')->name('internaldocmoeimoinv');



    // ======== INVESTIGATION : SPECIAL REPORT ===============\\
    Route::get('/specialreport', 'specialreportController@abpppaobppp')->name('specialreportabppp');

    Route::get('/specialreportapproval', 'specialreportController@abpppaobppp')->name('specialreportaobppp');



    // ======== INVESTIGATION : CLARIFICATION ===============\\
    Route::get('/clarification', 'clarificationController@acppaocpp')->name('clarificationacpp');

    Route::get('/clarificationapproval', 'clarificationController@acppaocpp')->name('clarificationaocpp');

});
