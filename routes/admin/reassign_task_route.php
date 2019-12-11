<?php

Route::get('/reassign_task_managements', function () {
    return view('user_admin.reassign_task.reassign_task');
})->name('r_task');