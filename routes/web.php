<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\FirstController;
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

Route::get('/', [FirstController::class, 'index']);

Route::get('/article/{id}', [FirstController::class, 'article']);

Route::get('/artist/{id}', [FirstController::class, 'artist']);

Route::get("/photos/create", [FirstController::class, "create"])->middleware("auth");

Route::post("/photos/store", [FirstController::class, "store"])->middleware("auth");

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get("/user/{id}", [FirstController::class, "user"]);

Route::get("/changesuivi/{id} ", [FirstController::class, "follow"]);