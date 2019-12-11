<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/*
|--------------------------------------------------------------------------
| Web Routes Based On Module
|--------------------------------------------------------------------------

*/

//Route::group(['middleware' => ['census_staff','csamtokencheck']], function () {
//    collect(glob(base_path('/routes/web/general/*.php')))
//        ->each(function ($path) {
//            require $path;
//        });
//});

Route::group(['prefix' => '/'],function () {
    collect(glob(base_path('/routes/general/*.php')))
        ->each(function ($path) {
            require $path;
        });
});

Route::group(['prefix' => 'scheme','namespace'=>'Scheme'],function () {
    collect(glob(base_path('/routes/scheme/*.php')))
        ->each(function ($path) {
            require $path;
        });
});

Route::group(['prefix' => 'medical','namespace'=>'Medical'],function () {
    collect(glob(base_path('/routes/medical/medicalboard/*.php')))
        ->each(function ($path) {
            require $path;
        });
});

Route::group(['prefix' => 'rtw','namespace'=>'RTW'],function () {
    collect(glob(base_path('/routes/rtw/*.php')))
        ->each(function ($path) {
            require $path;
        });
});

Route::group(['prefix' => 'admin','namespace'=>'Admin'],function () {
    collect(glob(base_path('/routes/admin/*.php')))
        ->each(function ($path) {
            require $path;
        });
});

Route::group(['prefix' => 'medicalservice','namespace'=>'Medical\MedicalServices'],function () {
    collect(glob(base_path('/routes/medical/medicalservice/*.php')))
        ->each(function ($path) {
            require $path;
        });
});



Route::get('/home', 'WorkbasketController@wblist');
Route::get('/getnotice', 'WorkbasketController@getnotice');
Route::get('/deletedraft', 'WorkbasketController@deletedraft');
