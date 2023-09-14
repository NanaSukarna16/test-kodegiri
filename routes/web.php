<?php

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SignatureController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('auth/login');
});

Route::middleware('auth')->group(function () {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    Route::resource('profile', ProfileController::class)->only('show', 'edit');
    Route::post('profile/{profile}', [ProfileController::class, 'update'])->name('profile.update');

    Route::resource('document', DocumentController::class)->except('update', 'destroy');
    Route::post('document/{document}/update', [DocumentController::class, 'update'])->name('document.update');
    Route::delete('document/{document}/destroy', [DocumentController::class, 'destroy'])->name('document.destroy');
    Route::get('signaturepad/{document}', [SignatureController::class, 'index'])->name('signaturepad.create');
    Route::post('signaturepad/{document}', [SignatureController::class, 'upload'])->name('signaturepad.upload');
});

Auth::routes();
