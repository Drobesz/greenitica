<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\Transaction;
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
            ['items' => Item::with('partner')->get()]
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
