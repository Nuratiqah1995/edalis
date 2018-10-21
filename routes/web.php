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

// Route::get('/', function () {
// return view('login');
// });

Route::get('/', function () {
    return view('index');
})->middleware('auth');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::post('/profile-personal', 'ProfileController@personal')->name('profile.personal');
Route::post('/profile-study', 'ProfileController@study')->name('profile.study');
Route::post('/profile-address', 'ProfileController@address')->name('profile.address');
Route::post('/profile-parent', 'ProfileController@parent')->name('profile.parent');
Route::resource('/profile', 'ProfileController')->middleware('auth');
Route::get('/business-info', 'BusinessInfoController@index')->name('business-info.index')->middleware('auth'); //kena coading mcm ni sbb masa comman line untuk make:controller tak letak -r
Route::resource('/sales-info', 'SalesInfoController')->middleware('auth');

Route::resource('entrepreneur-info', 'EntrepreneurProfileController')->middleware('auth');
Route::resource('entrepreneur-business', 'EntrepreneurBusinessController')->middleware('auth');
Route::resource('entrepreneur-sales', 'EntrepreneurSalesController')->middleware('auth');

Route::get('top-weekly', 'EntrepreneurSalesController@topWeekly')->name('top-weekly')->middleware('auth');
Route::get('top-monthly', 'EntrepreneurSalesController@topMonthly')->name('top-monthly')->middleware('auth');
Route::get('top-yearly', 'EntrepreneurSalesController@topYearly')->name('top-yearly')->middleware('auth');
Route::post('/business-info', 'BusinessInfoController@info')->name('business-info.info'); //lepas get or resource, semua benda yg di key in akn dimasukkan guna method post ni
Route::post('/business-address', 'BusinessInfoController@address')->name('business-address.address');
Route::resource('/sales-info', 'SalesInfoController')->middleware('auth');
