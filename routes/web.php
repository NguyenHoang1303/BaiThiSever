<?php

use App\Http\Controllers\FurnitureController;
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

Route::get('/furniture', [FurnitureController::class,'getAll']);
Route::post('/furniture/create', [FurnitureController::class,'create']);
Route::get('/furniture/search', [FurnitureController::class,'search']);
