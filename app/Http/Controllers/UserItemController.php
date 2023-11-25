<?php

namespace App\Http\Controllers;

use App\Models\Item;
use App\Models\User;
use App\Models\UserItem;
use Illuminate\Http\Request;

class UserItemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('useritems', [
            'userItems' => UserItem::with(['item', 'fromuser', 'recipientuser'])->get(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $ui = new UserItem();
        $ui->item_id = $request->get('item_id');
        $ui->from_user_id = $request->get('from_user_id');
        $ui->recipient_user_id = $request->get('recipient_user_id');
        $ui->is_redeemed = $request->get('is_redeemed');
        $ui->is_gifted = $request->get('from_user_id') !== $request->get('recipient_user_id');
        $ui->qr_code = substr(bin2hex(random_bytes(10)),0,10);
        $ui->save();

        $item = Item::findOrFail($request->get('item_id'));

        $user = User::findOrFail(1);
        $user->balance -= $item->price;
        $user->save();

        return redirect()->back()->with('message', 'You successfully bought the item!');
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
