<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'PagesController@home');
Route::get('/contact', 'PagesController@contact');
Route::post('/contact', 'PagesController@contactPost');
Route::get('articlesGuest', 'PagesController@articlesGuest');
Route::get('articlesGuest/{article}', 'PagesController@articlesGuestShow');



Route::group(['prefix' => 'manager', 'middleware' => 'manager'], function () {
	Route::get('dashboard', 'ManagerController@getDashboard');
	Route::get('publish_article/{id}', 'ArticleResourceController@publishArticle');
	});

Route::resource('users','UserResourceController');
Route::resource('articles','ArticleResourceController');




Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

