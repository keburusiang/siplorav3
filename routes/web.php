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


Route::get('/about', function () {
    return view('home.about');
});

Route::get('/pilihan', function () {
    return view('home.pilihan');
});



Route::get('/','HomeController@index');
// Route::get('/lapor', 'LaporController@index');
// Route::get('/lapor', 'LaporController@store')->name('lapor');
Route::resource('/lapor','LaporController');


// Route::get('/home', 'HomeController@index')->name('home');

$this->get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
$this->post('/register', 'Auth\RegisterController@register');

$this->get('/login', 'Auth\LoginController@showLoginForm')->name('login');
$this->post('/login', 'Auth\LoginController@login');

$this->post('/logout', 'Auth\LoginController@logout')->name('logout');


// redirect ke DASHBOARD

// Route::get('/pelapor/dashboard/{id}', 'PelaporController@dashboard');
Route::get('/pelapor/dashboard/','PelaporController@show')->middleware('auth');
Route::patch('/pelapor/dashboard/', 'PelaporController@update');
Route::get('/pelapor/dashboard/profile/','PelaporController@showProfile')->middleware('auth');
Route::post('/pelapor/dashboard/profile/','PelaporController@edit')->middleware('auth');


// Route::get('/pelapor/dashboard/pelapor/','PelaporController@showProfile');

Route::get('/bnpb/dashboard/','BnpbController@show');
Route::get('/bnpb/dashboard/table/','BnpbController@showTable');
Route::get('/bnpb/dashboard/map/','BnpbController@showMap');
Route::post('/bnpb/dashboard/table/{lapor}','LaporController@verif')->name('verif');
