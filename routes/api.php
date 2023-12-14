<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MitraController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });


Route::post('/mitras', [MitraController::class, 'post'])->middleware('api');
Route::post('/mitras/update', [MitraController::class, 'put'])->middleware('api');

Route::post('/district', [MitraController::class, 'district']);
Route::post('/city', [MitraController::class, 'city']);
