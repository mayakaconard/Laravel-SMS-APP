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



Route::get('/', 'Auth\LoginController@showLoginForm');
//Route::get('/register', 'HomeController@register');
//Route::get('/signup', ['as' => 'signup', 'uses' => 'HomeController@signup']);


//Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');


Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'AuthController@login');
Route::post('logout', 'AuthController@logout');
// Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');
// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');

Route::post('sendMessage', ['as' => 'sendMessage', 'uses' => 'SendSmsController@sendMessage']);

Route::group(['prefix' => '/Dashboard'], function () {
    Route::get('home', ['as' => 'home', 'uses' => 'HomeController@index']);
    Route::get('sendsms', ['as' => 'sendSMS', 'uses' => 'SendSmsController@index']);
    Route::get('sent_messages', ['as' => 'sent_messages', 'uses' => 'SmsMonitorController@index']);
});
