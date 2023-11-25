<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Eloquent\Collection;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view(
            'item',
            ['items' => Item::with('partner')->get(), 'user' => User::findOrFail(1), 'users' => User::get()]
        );
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        return $item;
    }
}
