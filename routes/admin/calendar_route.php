<?php

/* -------------------- Calendar ----------------------- */

/* -------------------- weekend ----------------------- */

Route::get('/calendar_managements', 'HolidayController@index_holiday')->name('calendar');

Route::post('/register_weekends', 'HolidayController@post_weekend')->name('create_weekend');

Route::post('/update_weekend', 'HolidayController@update_weekend')->name('update_weekend');

Route::post('/delete_weekend', 'HolidayController@delete_weekend')->name('delete_weekend');


/* -------------------- holiday ----------------------- */


Route::post('/register_holiday', 'HolidayController@post_holiday')->name('register_publicHoliday');

Route::post('/search_holiday', 'HolidayController@search_holiday')->name('search_holiday');

Route::post('/update_holiday', 'HolidayController@update_holiday')->name('update_publicHoliday');

Route::post('/delete_holiday', 'HolidayController@delete_holiday')->name('delete_holiday');

Route::get('/calendar', 'HolidayController@get_calendar')->name('display_calendar');



