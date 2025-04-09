<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    use HasFactory;

    public function users()
    {
        return $this->belongsToMany(User::class, 'cart', 'item_id', 'user_id');
    }

    public function carts()
    {
        return $this->hasMany(Cart::class, 'item_id');
    }

    public function scopeWithUser($query, $userId)
    {
        return $query->whereHas('users', function ($q) use ($userId) {
            $q->where('user_id', $userId);
        });
    }
    public function scopeWithCart($query, $userId)
    {
        return $query->whereHas('cart', function ($q) use ($userId) {
            $q->where('user_id', $userId);
        });
    }
}
