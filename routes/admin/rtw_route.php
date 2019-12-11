<?php

/* -------------------- RTW Management ----------------------- */

Route::get('/create_service_providers_rtw', function () {
    return view('user_admin.RTWManagement.CreateSPRTW');
})->name('service_provider_rtw');

Route::get('/sp_managements_rtw', function () {
    return view('user_admin.RTWManagement.ManageSPRTW');
})->name('sprtw_management');

Route::get('/update_service_providers_rtw', function () {
    return view('user_admin.RTWManagement.UpdateSPRTW');
})->name('update_sprtw');

Route::get('/create_sp_representatives_rtw', function () {
    return view('user_admin.RTWManagement.CreateSPRepRTW');
})->name('sprtw_rep');

Route::get('/sprtw_managements', function () {
    return view('user_admin.RTWManagement.ManageSPRepRTW');
})->name('sp_rtw_management');

Route::get('/update_sp_representatives_rtw', function () {
    return view('user_admin.RTWManagement.UpdateRepRTW');
})->name('update_reprtw');
