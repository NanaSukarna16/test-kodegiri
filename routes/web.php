<?php

use App\Http\Controllers\DocumentController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SendEmailController;
use App\Http\Controllers\SignatureController;
use App\Http\Controllers\SoalNomorSatuController;
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

    // fitur profile
    Route::resource('profile', ProfileController::class)->only('show', 'edit');
    Route::post('profile/{profile}', [ProfileController::class, 'update'])->name('profile.update');

    // fitur document
    Route::resource('document', DocumentController::class)->except('update', 'destroy');
    Route::post('document/{document}/update', [DocumentController::class, 'update'])->name('document.update');
    Route::delete('document/{document}/destroy', [DocumentController::class, 'destroy'])->name('document.destroy');
    Route::get('signaturepad/{document}', [SignatureController::class, 'index'])->name('signaturepad.create');
    Route::post('signaturepad/{document}', [SignatureController::class, 'upload'])->name('signaturepad.upload');
    Route::get('send-email/{document}', SendEmailController::class)->name('send-email.create');

    // soal nomor satu
    Route::get('soal-nomor-satu', SoalNomorSatuController::class)->name('soal-nomor-satu');
});

Auth::routes();
