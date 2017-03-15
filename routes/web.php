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

Route::resource('typeReferences', 'TypeReferenceController');

Route::resource('categories', 'CategoryController');

Route::resource('products', 'ProductController');

Route::resource('productOffers', 'ProductOfferController');

Route::resource('productDetails', 'ProductDetailController');

Route::resource('orders', 'OrderController');

Route::resource('orderDetails', 'OrderDetailController');

Route::resource('virtualProducts', 'VirtualProductController');

Route::resource('virtualProductOrders', 'VirtualProductOrderController');

Route::resource('freeProducts', 'FreeProductController');

Route::resource('freeProductParticipants', 'FreeProductParticipantController');

Route::resource('freeProductOrders', 'FreeProductOrderController');

Route::resource('actionTypes', 'ActionTypeController');

Route::resource('logs', 'LogController');

Route::resource('notices', 'NoticeController');

Route::resource('userPoints', 'UserPointController');

Route::resource('comments', 'CommentController');

Route::resource('paypalOrders', 'PaypalOrderController');

Route::resource('companies', 'CompanyController');

Route::resource('companyFeatures', 'CompanyFeatureController');