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

// Login Routes...
Route::get('login', ['as' => 'login', 'uses' => 'Auth\LoginController@showLoginForm']);
Route::post('login', ['as' => 'login.post', 'uses' => 'Auth\LoginController@login']);
Route::post('logout', ['as' => 'logout', 'uses' => 'Auth\LoginController@logout']);
Route::get('logout', 'Auth\LoginController@logout');

// Registration Routes...
Route::get('register', ['as' => 'register', function(){abort(499, 'Not available in demo mode.');}]);
//Route::get('register', ['as' => 'register', 'uses' => 'Auth\RegisterController@showRegistrationForm']);
//Route::post('register', ['as' => 'register.post', 'uses' => 'Auth\RegisterController@register']);

// Password Reset Routes...
//Route::get('password/reset', ['as' => 'password.reset', 'uses' => 'Auth\ForgotPasswordController@showLinkRequestForm']);
Route::post('password/email', ['as' => 'password.email', function(){abort(499, 'Not available in demo mode.');}]);
//Route::post('password/email', ['as' => 'password.email', 'uses' => 'Auth\ForgotPasswordController@sendResetLinkEmail']);
//Route::get('password/reset/{token}', ['as' => 'password.reset.token', 'uses' => 'Auth\ResetPasswordController@showResetForm']);
//Route::post('password/reset', ['as' => 'password.reset.post', 'uses' => 'Auth\ResetPasswordController@reset']);


Route::get('/', 'HomeController@index')->name('welcome');

Route::get('/home', 'HomeController@index')->name('home-one');

Route::get('/home-two', 'HomeController@homeTwo')->name('home-two');

Route::get('/categories', 'CategoriesController@index');
Route::get('/categories/create', 'CategoriesController@create');
Route::post('/categories/create', 'CategoriesController@store');
Route::get('/categories/{id?}', 'CategoriesController@show');
Route::get('/categories/{id?}/edit', 'CategoriesController@edit');
Route::post('/categories/{id?}/edit', 'CategoriesController@update');
Route::post('/categories/{id?}/delete', 'CategoriesController@destroy');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('auth/{provider}', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/{provider}/callback', 'Auth\RegisterController@handleProviderCallback');


Route::get('/experiences/create', 'ExperienceController@create');
Route::post('/experiences/create', 'ExperienceController@store');
Route::get('experiencieslist', 'ExperienceController@index');