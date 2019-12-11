<?php

/* -------------------- Medical Service Provider ----------------------- */

Route::get('/create_service_providers', function () {
    return view('user_admin.Hospital.CreateserviceProvider(SP)');
})->name('service_provider');

Route::get('/sp_managements', function () {
    return view('user_admin.Hospital.ManageSP');
})->name('sp_management');

Route::get('/update_service_providers', function () {
    return view('user_admin.Hospital.UpdateSP');
})->name('update_sp');

Route::get('/create_sp_representatives', function () {
    return view('user_admin.Hospital.CreateSPRepresentative');
})->name('sp_rep');

Route::get('/spr_managements', function () {
    return view('user_admin.Hospital.Managerepresentative');
})->name('spr_management');

Route::get('/update_sp_representatives', function () {
    return view('user_admin.Hospital.UpdateRep');
})->name('update_rep');
