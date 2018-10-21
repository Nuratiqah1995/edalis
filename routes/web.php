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