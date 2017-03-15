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


Route::group(['prefix'=>'admin','middleware'=>['auth']],function (){
    Route::resource('articles', 'ArticleController');
    Route::resource('pages', 'PageController');
    Route::resource('photoGalleries', 'PhotoGalleryController');
    Route::resource('photos', 'PhotoController');
    Route::resource('formPosts', 'FormPostController');
    Route::resource('tags', 'TagController');
    Route::resource('articlesTags', 'ArticlesTagController');
    Route::resource('settings', 'SettingController');
    Route::resource('categories', 'CategoryController');
    Route::resource('news', 'NewsController');
    Route::resource('sliders', 'SliderController');
    Route::resource('menuses', 'MenusController');
    Route::resource('faqs', 'FaqController');
    Route::resource('projects', 'ProjectController');
    Route::resource('videos', 'VideoController');
});