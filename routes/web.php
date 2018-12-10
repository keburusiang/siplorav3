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

// Auth::routes();


// Route::get('/', function () {
//     return view('/home/index');
// });

Route::get('/','HomeController@index');
Route::get('/lapor', 'LaporController@index');


// Route::get('/home', 'HomeController@index')->name('home');

$this->get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('/register', 'Auth\RegisterController@register');

$this->get('/login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('/login', 'Auth\LoginController@login');

$this->post('/logout', 'Auth\LoginController@logout')->name('logout');

