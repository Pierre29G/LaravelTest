<?php

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

Route::get('/about', [FirstController::class, 'about']);

Route::get('/index', [FirstController::class, 'index']);

Route::get('/article/{id}', [FirstController::class, 'article']);
