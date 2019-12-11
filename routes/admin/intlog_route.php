<?php

/* -------------------- integration log ----------------------- */

Route::get('/integration_log', 'Int_logController@get_log')->name('log');

