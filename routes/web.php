<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MitraController;
use Illuminate\Http\Request;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::post('/mitras', [MitraController::class, 'store']);
// Route::get('/mitras/{id}', [MitraController::class, 'show']);
// Route::put('/mitras/{id}', [MitraController::class, 'update']);
// Route::delete('/mitras/{id}', [MitraController::class, 'destroy']);

// API
Route::get('/mitras', [MitraController::class, 'index']);
Route::get('/mitras/{account}', [MitraController::class, 'show']);

Route::get('/addmitras/{account}', [MitraController::class, 'add']);
Route::post('/addmitras', [MitraController::class, 'store']);
