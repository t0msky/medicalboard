<?php

Route::get('/user_unavailability', function () {
    return view('user_admin.user_unavailability.user_unavailability');
})->name('user_unavailability');