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

Route::get('/home', 'HomeController@index');

Route::get('/seo','SEOController@index');

Route::resource('revisions', 'RevisionController');

Route::resource('messengerThreads', 'MessengerThreadController');

Route::resource('messages', 'MessageController');

Route::resource('participants', 'ParticipantController');

Route::resource('settings', 'SettingController');

Route::resource('adspaces', 'AdspaceController');

Route::resource('advertisements', 'AdvertisementController');

Route::resource('pages', 'PageController');

Route::resource('stats', 'StatController');