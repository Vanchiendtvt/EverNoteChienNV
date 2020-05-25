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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/notes', 'NotesController@index')->name("allNotes");
Route::get('/notes/create', 'NotesController@create')->name("createNote");


Route::get('/login-google', function() {
    return Socialite::with('Google')->redirect();
})->name('loginGoogle');

Route::get('/google-callback', 'Auth\AuthSocialAuthController@loginGoogleCallback')->name('googleCallback');

// facebook login
Route::get('/login-facebook', function() {
    return Socialite::with('Facebook')->redirect();
})->name('loginFacebook');

Route::get('/facebook-callback', 'Auth\AuthSocialAuthController@loginFacebookCallback')->name('facebookCallback');


