<?php

/* -------------------- Hospital ----------------------- */

Route::get('/create_hospitals', 'HospitalController@index')->name('hospital');

Route::post('/create_hospitals', 'HospitalController@post_hospital')->name('create_hospital');

Route::get('/edit_hospitals/{id}', 'HospitalController@edit_hospital')->name('edit_hospital');

Route::post('/update_hospitals', 'HospitalController@update_hospital')->name('update_hospital');

Route::get('/hospital_managements', 'HospitalController@get_hospital')->name('hospital_management');

Route::post('/delete_hospital', 'HospitalController@delete_hospital')->name('delete_hospital');

// Route::get('/hospital_managements', function () {
//     return view('user_admin.Hospital.HospitalManagement');
// })->name('hospital_management');

// Route::get('/update_hospitals', function () {
//     return view('user_admin.Hospital.CreateDoctor');
// })->name('create_doctor');


Route::get('/create_doctors', 'DoctorController@index')->name('doctor');

Route::post('/create_doctors', 'DoctorController@post_doctor')->name('create_doctor');

Route::get('/doctor_managements', 'DoctorController@get_doctor')->name('doctor_management');

Route::get('/edit_doctors/{id}', 'DoctorController@edit_doctor')->name('edit_doctor');

Route::post('/update_doctor', 'DoctorController@update_doctor')->name('update_doctor');

Route::post('/delete_doctor', 'DoctorController@delete_doctor')->name('delete_doctor');

Route::get('/search_nric_doctor', 'DoctorController@index')->name('checking_doctor');

// Route::get('/doctor_managements', function () {
//     return view('user_admin.Hospital.ManageDoctor');
// })->name('doctor_management');

// Route::get('/update_doctors', function () {
//     return view('user_admin.Hospital.UpdateDoctor');
// })->name('update_doctor');

Route::get('/create_nurses', function () {
    return view('user_admin.Hospital.CreateNurse');
})->name('nurse');

Route::get('/nurse_managements', function () {
    return view('user_admin.Hospital.ManageNurse');
})->name('nurse_management');

Route::get('/update_nurses', function () {
    return view('user_admin.Hospital.UpdateNurse');
})->name('update_nurse');