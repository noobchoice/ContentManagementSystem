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

// Route::get('/', function () {
//     return view('layouts.frontend');
// });

# FrontEnd Routes

Route::get('/',[
	'as'	=>	'home',
	'uses'	=>	'FrontEnd\FrontEndController@index'
]);

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// For Admin Panel
Route::get('/admin','AdminController@index')->name('admin');
// For teacher
Route::get('/teacher', 'FrontEnd\FrontEndController@teacher')->name('teacher');
// for about_us
Route::get('/about', 'FrontEnd\FrontEndController@about_us')->name('about');
// for blog
Route::get('/blog', 'FrontEnd\FrontEndController@blog')->name('blog');
//for contact
Route::get('/contact', 'FrontEnd\FrontEndController@contact_us')->name('contact');
//Contact Send Data 
