<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

Auth::routes();


Route::middleware("auth")
->namespace('Admin')
->prefix('admin')
->name('admin.')
->group (function(){
    Route::get('/', 'HomeController@index')->name('home');
    Route::resource('posts', 'PostController');
});

Route::get('/contact', 'Guest\ContactController@contact')->name('guest.contact');
Route::post('/contact', 'Guest\ContactController@contactMailSender')->name('guest.contact');
Route::get('/thanks', 'Guest\ContactController@mailSent')->name('guest.thanks');


Route::get('/{any?}', function(){
    return view('guest.home');
})->where('any', '.*');
