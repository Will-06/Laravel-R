<?php

use Illuminate\Support\Facades\Route;
use OrmController;

Route::get('/', function () {
    return view('welcome');
});




Route::get('/consultas', [OrmController::class, 'consultas']);
