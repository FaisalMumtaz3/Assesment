<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AssesmentController;


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



//Index Page
Route::get('/', [AssesmentController::class, 'index']);
Route::post('/saveClientRecord', [AssesmentController::class, 'saveClientRecord']);

