<?php

use Illuminate\Support\Facades\Route;

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
//home
Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

//gempur
Route::get('/gempur', 'GempurController@gempur');

//login
Route::get('/login', 'AuthController@login')->name('login');
Route::post('/postlogin', 'AuthController@postlogin');
//logout
Route::get('/logout', 'AuthController@logout');

//Upload File
Route::get('/uploads', 'UploadsController@index')->middleware('auth');
Route::get('/uploads/create', 'UploadsController@create');
Route::get('/uploads/{upload}', 'UploadsController@show')->middleware('auth');
Route::post('/uploads', 'UploadsController@store');
Route::delete('/uploads/{upload}', 'UploadsController@destroy')->middleware('auth');

//donations
Route::get('/dashboard', 'DashboardController@index')->middleware('auth');
Route::get('/donations', 'DonationsController@index')->middleware('auth');
Route::get('/donations/create', 'DonationsController@create')->middleware('auth');
Route::get('/donations/{donation}', 'DonationsController@show')->middleware('auth');
Route::post('/donations', 'DonationsController@store')->middleware('auth');
Route::delete('/donations/{donation}', 'DonationsController@destroy')->middleware('auth');
Route::get('/donations/{donation}/edit', 'DonationsController@edit')->middleware('auth');
Route::patch('/donations/{donation}', 'DonationsController@update')->middleware('auth');
// Route::resource('donations', 'DonationsController');


//Export Excel
Route::get('/exportexcel', 'DonationsController@exportexcel')->name('exportexcel');

//Export PDF
Route::get('/exportpdf', 'DonationsController@exportpdf')->name('exportexcel');

//markasread
Route::get('markAsRead', function(){
    auth()->user()->unreadNotifications->markAsRead();
    return redirect()->back();
})->name('markRead');




