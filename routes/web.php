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

Route::get('/', function () {
    return view('usuarios.userform');
});

route::get("/form",[\App\Http\Controllers\UserController::class,'userform'])->name("usuarios.userform");
route::post("/save",[\App\Http\Controllers\UserController::class,'save']);
