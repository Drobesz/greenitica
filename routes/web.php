<?php

use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\PartnerController;
use App\Http\Controllers\UserItemController;
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

Route::get('/', [TransactionController::class, 'index']);
Route::get('transactions', [TransactionController::class, 'index']);
Route::get('profile', [UserController::class, 'index']);
Route::get('items', [ItemController::class, 'index']);
Route::Resource('users', UserController::class);
Route::Resource('useritems', UserItemController::class);
