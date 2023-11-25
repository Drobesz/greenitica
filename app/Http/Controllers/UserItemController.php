<?php

namespace App\Http\Controllers;

use App\Models\UserItem;
use Illuminate\Http\Request;

class UserItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return UserItem::with(['item', 'fromuser','recipientuser'])->get();
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserItem $userItem)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(UserItem $userItem)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserItem $userItem)
    {
        //
    }
}
