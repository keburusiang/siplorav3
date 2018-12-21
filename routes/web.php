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


Route::get('/','HomeController@index');
Route::get('/pilihan','HomeController@login');
Route::resource('/lapor','LaporController');
Route::get('/register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('/register', 'Auth\RegisterController@register');
Route::get('/login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('/login', 'Auth\LoginController@login');
Route::get('/loginBnpb', 'Bnpb\BnpbLoginController@showLoginForm')->name('bnpb.login');
Route::post('/loginBnpb', 'Bnpb\BnpbLoginController@login');
Route::post('/bnpb/dashboard/', 'Bnpb\BnpbLoginController@logout')->name('bnpb.logout');
Route::post('/logout', 'Auth\LoginController@logout')->name('logout');
Route::get('/pelapor/dashboard/','PelaporController@show')->middleware('auth');
Route::patch('/pelapor/dashboard/', 'PelaporController@update');
Route::get('/pelapor/dashboard/profile/','PelaporController@showProfile')->middleware('auth');
Route::post('/pelapor/dashboard/profile/','PelaporController@edit')->middleware('auth');
Route::get('/bnpb/dashboard/table/','BnpbController@showTable');
Route::get('/bnpb/dashboard/map/','BnpbController@showMap');
Route::put('/bnpb/dashboard/table/{lapor}','BnpbController@verif')->name('verif');
// Route::put('/bnpb/dashboard/table/{lapor}','BnpbController@destroy')->name('delete');

