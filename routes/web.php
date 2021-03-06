<?php

use Illuminate\Support\Facades\Route;


Route::get('/', 'App\Http\Controllers\TodoController@index');

Route::resource('todo', 'App\Http\Controllers\TodoController');
