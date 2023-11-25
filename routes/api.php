<?php

use App\Http\Controllers\ItemController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserItemController;
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

Route::apiResource('partners', PartnerController::class);
Route::apiResource('transactions', TransactionController::class);
Route::apiResource('items', ItemController::class);
Route::apiResource('useritems', UserItemController::class);
