<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SaveController;
use App\Http\Controllers\Admin;

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

Route::get('/', [SaveController::class, 'index']);
Route::post('/', [SaveController::class, 'saveCredentials']);

Route::get('/dashboard',[SaveController::class, 'dashboard']);
Route::view('/about',[SaveController::class, 'about']);
Route::view('/contact',[SaveController::class, 'contact']);

//admin controller
Route::get('/admin',[Admin::class, 'admin']);
Route::get('/admin',[Admin::class, 'display']);