<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\SignatureController;
use App\Http\Controllers\PdfController;

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
Route::get('/', [PdfController::class, 'index']);
Route::get('/pdf-generator', [PdfController::class, 'index']);

Route::get('/signature', [SignatureController::class, 'index']);
Route::post('/store', [SignatureController::class, 'store'])->name('store');

