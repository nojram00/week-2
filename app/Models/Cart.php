<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Cart extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function item()
    {
        return $this->belongsTo(Item::class, 'item_id');
    }
    public function items()
    {
        return $this->hasMany(Item::class, 'item_id');
    }
    public function scopeWithUser($query, $userId)
    {
        return $query->where('user_id', $userId);
    }

    public function add_to_cart($item)
    {
        $this->item_id = $item->id;
        $this->user_id = Auth::user()->id;
        $this->save();
    }

    public static function AddToCart($item)
    {
        $user = Auth::user();
        if ($user) {
            $cart = new Cart();
            $cart->add_to_cart($item);
            return true;
        }
        return false;
    }

    public static function GetUserCart()
    {
        $user = Auth::user();
        if ($user) {
            return Cart::where('user_id', $user->id)->with('item')->get();
        }
        return [];
    }

    public static function RemoveFromCart($itemId)
    {
        $user = Auth::user();
        if ($user) {
            Cart::where('user_id', $user->id)->where('item_id', $itemId)->delete();
            return true;
        }
        return false;
    }
}
