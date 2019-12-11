<?php
Route::group(['namespace'=>'NewClaim'], function () {
    
    Route::post('/employerDetails', 'CommonController@postEmployer')->name('post.employer');
    Route::get('/success', 'CommonController@success');
    Route::post('/backhome', 'CommonController@backhome');
    Route::post('/back', 'CommonController@BacktoConfirmation');//chg07072019
   
    Route::post('/socsoOffice', 'CommonController@postSocsoOffice')->name('socso_office');
    Route::get('/getSocsoOffice', 'CommonController@getSocsoOffice')->name('socso_branch');
    Route::post('/certificate', 'CommonController@postCertificate')->name('post.certification');
    // Route::post('/confirmation', 'CommonController@postConfirmation')->name('post_confirmation');

    Route::post('/noticeconfirmation', 'CommonController@postConfirmation')->name('notice_confirmation');
    Route::post('/sendnotification', 'CommonController@postSendNotification')->name('send_notification');
    

    //NAJMI
    Route::post('/obform', 'CommonController@postObForm')->name('post.ob');
    Route::post('emphistory', 'CommonController@postupdateEmphistory')->name('add_emp_history');
    Route::post('updateemphistory', 'CommonController@postupdateEmphistory')->name('update_emp_history');
    Route::delete('deleteemphistory/{id_emp}', 'CommonController@deleteEmphistory')->name('delete_emp_history');
    Route::post('/queryOpinion', 'CommonController@postqueryOpinion')->name('query_opinion');
    Route::delete('/deleteOpinion/{op_id}', 'CommonController@deletequeryOpinion')->name('delete_opinion');
    Route::get('/viewSelectedNotification', 'CommonController@getSelectedNotification')->name('selected_notification');
    Route::post('/bankinformation', 'CommonController@postBankInfo')->name('bank_info');
    Route::post('/addremarks', 'CommonController@postRemarks')->name('remarks');//mat-remarks 04112019
    Route::post('/appointment', 'CommonController@postAppointment')->name('add_appointment');
    Route::get('/getselectedappointment', 'CommonController@getAppointmentdata')->name('selected_appointment');
    

});


 Route::post('/search', 'NoticeTypeController@noticeType')->name('search');
 Route::get('/', 'NoticeTypeController@index')->name('noticetype');
 Route::get('/search', 'NoticeTypeController@index');
 Route::post('/idno', 'NoticeTypeController@noticeType');
 Route::get('/idno', 'NoticeTypeController@index');
