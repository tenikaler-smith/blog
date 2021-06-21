<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Controller;

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
// RUTA: pantilla
Route::get('/plantilla', [Controller::class, "plantilla"])->name("matrix-admin-bt5.html.ltr");


// Ruta: proyecto
Route::get('/inicio', [Controller::class, "index"])->name("index");

Route::get('/', [Controller::class, "login"])->name("theme.back.login");
Route::get('/app', [Controller::class, "app"])->name("theme.back.app");
