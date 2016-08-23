<?php

Route::get('/', function () {
    return view('welcome');
});

Route::get('/guardar', 'DateTimeController@guardar');

Route::resource('form', 'DateTimeController');

Route::get('/pdf/{id}', 'DateTimeController@pdf');

Route::get('/enviado', function() {
	return view('enviado');
});