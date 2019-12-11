<?php

/* -------------------- Audittrail ----------------------- */

Route::get('/Audittrails', function () {
    return view('user_admin.AuditTrail.AudittrailManagement');
})->name('audit');
