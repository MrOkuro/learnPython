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


//Auth::routes();
// Authentication Routes..
$this->get('login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('login', 'Auth\LoginController@login');


// Password Reset Routes...
$this->get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
$this->post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
$this->get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
$this->post('password/reset', 'Auth\ResetPasswordController@reset');


	// Registration Routes...
	$this->get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
	$this->post('/register', 'Auth\RegisterController@register');

/*
Route::get('/', function () {
    return view('welcome');
});
*/



Route::get('/', function () {
return view('layouts.default');
});


//Route pour dashbord
Route::get('/admin', 'Admin\PostsController@index')->name('admin.index');
Route::get('/admin/create', 'Admin\PostsController@create')->name('post.create');
Route::post('/admin/store', 'Admin\PostsController@store')->name('post.store');
Route::put('/admin/{post}', 'Admin\PostsController@update')->name('post.update');
Route::get('/admin/form/update/{id}','Admin\PostsController@form_update')->name('post.form_update');
Route::delete('/admin/{post}', 'Admin\PostsController@delete')->name('post.delete');


//Route pour les posts
Route::get('/post', 'PostsController@index')->name('post.index');
Route::get('/post/{post}/','PostsController@show')->name('post.show');
Route::post('/post/search', 'PostsController@index')->name('post.index.search');


//route pour les catégories
//Route::get('/categories','CategoriesController@index')->name('categorie.index');
Route::get('/categories/','CategoriesController@show')->name('categorie.index');
Route::get('/categories/{id}','CategoriesController@showsouscategorie')->name('categorie.souscategorie');
Route::get('/categories/{id}/liste','CategoriesController@showliste')->name('categorie.liste');