<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

//CRUD mail
Route::resource('tickets', 'TicketsController');
Route::resource('ticketstatus', 'TicketStatusController');

Route::post('api/tickets', 'ApiController@check');
Route::get('api/tickets', 'ApiController@check');

Route::get('/basicemail', 'MailController@basic_email');
Route::get('/htmlemail', 'MailController@html_email');
Route::get('/attachemail', 'MailController@attachment_email');

