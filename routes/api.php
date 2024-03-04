<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QRCodeController;


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

Route::middleware(['auth:sanctum'])->post('/user', function (Request $request) {
    return $request->user();
});

// Route to store a new QR code
Route::post('/qrcodes', [QRCodeController::class, 'store']);

// Route to retrieve a QR code by card ID
Route::get('/qrcodes/{cardId}', [QRCodeController::class, 'show']);