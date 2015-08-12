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

Route::resource('/', 'WelcomeController', ['only' => ['index']]);
Route::resource('/about', 'AboutController', ['only' => ['index']]);
Route::resource('/blog', 'InvoiceController', ['only' => ['index', 'show']]);
Route::resource('/contact', 'ContactController', ['only' => ['index', 'store']]);
Route::resource('/invoice', 'InvoiceController', ['only' => ['index', 'store']]);
Route::resource('/portfolio', 'PortfolioController', ['only' => ['show']]);

