<?php

namespace App\Http\Controllers;

use App\Models\Transaction;

class TransactionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            'transactions',
            ['transactions'=>Transaction::with('partner')->get()]
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Transaction $transaction)
    {
        return $transaction;
    }
}
