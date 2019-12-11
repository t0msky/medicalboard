<?php

/* -------------------- Parameter Value----------------------- */

Route::get('/create_parameterValues', function () {
    return view('user_admin.Parameter.CreateParameterValues');
})->name('parametervalue');

Route::get('/parameterValue_managements', function () {
    return view('user_admin.Parameter.ParameterValueManagement');
})->name('parametervalue_management');

Route::get('/update_parameterValues', function () {
    return view('user_admin.Parameter.UpdateParameterValue');
})->name('update_value');
