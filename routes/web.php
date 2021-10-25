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

Route::get('/', 'HomeController@index')->name('home');
Route::post('home/subscribe', 'HomeController@subscribe')->name('home.subscribe.submit');
//Route::get('/home', 'HomeController@index')->name('home');
Route::any('pages/{slug}', array('uses' => 'HomeController@pages'));
Route::any('pages/blog/{slug}', array('uses' => 'HomeController@single'));
Route::any('pages/blog/{slug}/comments', array('uses' => 'HomeController@addComment'));
///////////////// Admin Area/////////////////////
Auth::routes();
//Route::get('/administrator', 'Auth\LoginController@showLoginForm')->name('administrator');

Route::prefix('administrator')->group(function(){
	Route::get('/','AdminController@dashboard')->name('administrator');
	Route::get('/create','AdminController@create')->name('administrator.create');
	Route::post('/store','AdminController@store')->name('administrator.store');
	Route::get('/edit/{id}','AdminController@edit')->name('administrator.edit');
	Route::patch('/update/{id}','AdminController@update')->name('administrator.update');
	Route::delete('/destroy/{id}','AdminController@destroy')->name('administrator.destroy');
	Route::get('/adminlist','AdminController@adminlist')->name('administrator.adminlist');
	
	Route::get('/login','Auth\LoginController@showLoginForm')->name('administrator.login');
	Route::post('/login', 'Auth\LoginController@login');
	//Route::get('/register','Auth\RegisterController@showRegistrationForm')->name('administrator.register');

	Route::Resource('/member', 'UserAdminController');
	Route::Resource('/blog',   'BlogAdminController');
	Route::Resource('/banner',   'BannerController');
	Route::Resource('/offer',   'OfferAdminController');
	Route::resource('/menus', 'MenusController');
	Route::resource('/contents', 'ContentsController');
	Route::resource('/faqs', 'FaqsController');
	Route::resource('/directors', 'DirectorsController');
	Route::resource('/categories', 'CategoryController');
	//Route::Resource('/admin',   'AdminController');

});

Route::prefix('user')->group(function(){
	Route::get('/login','UserController@showLoginForm')->name('user.login');
	Route::post('/login','UserController@login')->name('user.login.submit');
	Route::get('/dashboard','UserController@index')->name('user.dashboard');
	Route::get('/register','HomeController@showRegistrationForm')->name('user.registration');
	Route::post('/register','HomeController@register')->name('user.registration.submit');	
	Route::get('/','UserController@index')->name('user.dashboard');
	//Route::get('/browse','UserController@browse')->name('user.browse');
	Route::any('/browse/{id}', array('uses' => 'UserController@browse'));
	//Route::post('/offer_filtering','UserController@offer_filtering')->name('user.offer_filtering');
	Route::get('/offer_filtering','UserController@offer_filtering');

});

