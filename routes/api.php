<?php

use App\Mocks\Partners;
use Illuminate\Support\Facades\Date;
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

Route::get('partners', function() {
    return Partners::get();
});

Route::get('users', function() {
    return
        [
            [
                'id' => 1,
                'name' => 'Kovács József',
                'email' => 'kovacs.jozsef@greenitica.local',
                'balance' => 100,
            ],
        ];
});
Route::get('transactions', function() {
    return
        [
            [
                'id' => 1,
                'user_id' => 1,
                'partner_id' => 1,
                'amount' => 30000,
                'category' => 'Transportation',
                'date' => Date::Now(),
                'carbon_token' => 1500,
            ],
        ];
});
