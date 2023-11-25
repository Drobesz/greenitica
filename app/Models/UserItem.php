<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserItem extends Model
{
    public $timestamps = false;

    public function item()
    {
        return $this->belongsTo(Item::class);
    }

    public function fromuser()
    {
        return $this->belongsTo(User::class, 'from_user_id','id');
    }

    public function recipientuser()
    {
        return $this->belongsTo(User::class, 'recipient_user_id', 'id');
    }

    use HasFactory;
}
