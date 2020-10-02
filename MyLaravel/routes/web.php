<?php

use Illuminate\Support\Facades\Route;

Route::get('/', 'EmployeeController@index') -> name('emp.index');
Route::get('/show/{id}', 'EmployeeController@show') -> name('emp.show');
Route::get('/create', 'EmployeeController@create') -> name('emp.create');
