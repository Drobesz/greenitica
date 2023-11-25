<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Illuminate\Database\Eloquent\Collection;

class ItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Collection
    {
        return Item::all();
    }

    /**
     * Display the specified resource.
     */
    public function show(Item $item)
    {
        return $item;
    }
}
