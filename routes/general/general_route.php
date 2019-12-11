<?php

Route::get('/', function () { return view('general.auth.login'); })->name('page_login');

/* -------------------- LOGOUT ----------------------- */

Route::get('/logout', 'Auth\AuthController@logout')->name('logout');

/* ----------------- AUTHENTICATION ------------------ */

Route::post('/login', 'Auth\AuthController@login')->name('login');

/* ------------------- HOME TASK --------------------- */

Route::get('/workbasket', 'WorkbasketController@workbasket_list')->name('workbasket');
Route::post('/workbasket', 'WorkbasketController@workbasket_list')->name('workbasket.post');

Route::get('/workbasket/{caserefno}', 'WorkbasketController@get_notice')->name('get_notice');


// Route::get('/app-layout', 'General\UserInterfaceController@appDotBlade')->name('app.layout');

//Route::get('/app-layout', function(){
//    $result = appBladeData();
//    return view('general.workbasket', compact('result'));
//    })->name('app.layout');

// Route::get('/workbasket', function(){ return view('general.workbasket'); })->name('workbasket');

Route::get('/Audittrail', function(){ return view('user_admin.AuditTrail.AudittrailManagement'); })->name('audit');

Route::get('/getnotice','WorkbasketController@getnotice');
Route::get('/deletedraft','WorkbasketController@deletedraft');

// Route::get('/register', function () {
//     return view('user_admin.User.CreateUser');
// })->name('regis');

// Route::get('/register', 'Auth\AuthController@index');

// Route::post('/register-user', 'Auth\AuthController@register')->name('register');

/* ------------------- User Profile  --------------------- */

Route::get('/user_profile', function () {
    return view('user_admin.user_profile.user_profile');
})->name('user_profile');

Route::get('locale', function () {
    return \App::getLocale();
});
Route::get('locale/{locale}', function ($locale) {
    \Session::put('locale', $locale);
    return redirect()->back();
});
