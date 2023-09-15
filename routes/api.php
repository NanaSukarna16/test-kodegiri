<?php

use App\Http\Controllers\Api\DocumentController;
use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\ProfileController;
use App\Http\Middleware\Authenticate;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('profile/{profile}', [ProfileController::class, 'show']);
Route::post('profile/{profile}', [ProfileController::class, 'update']);

Route::get('document', [DocumentController::class, 'index']);
Route::get('document/{document}', [DocumentController::class, 'show']);
Route::post('document/{document}', [DocumentController::class, 'update']);
Route::delete('document/{document}', [DocumentController::class, 'destroy']);


Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);
