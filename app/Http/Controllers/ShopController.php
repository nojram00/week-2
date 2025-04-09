<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ShopController extends Controller
{
    public function index()
    {
        $items = \App\Models\Item::orderBy('created_at', 'desc')->paginate(20);

        return view('pages.shop-page', compact('items'));
    }

    public function cart()
    {
        if(Auth::user() == null){
            return redirect()->route('login')->with('error', 'Please login to view your cart.');
        }

        $cartItems = \App\Models\Cart::GetUserCart();

        return view('pages.cart-page', compact('cartItems'));
    }

    public function show($id)
    {
        $item = \App\Models\Item::findOrFail($id);

        return view('pages.item-page', compact('item'));
    }

    public function add($id){

        $item = \App\Models\Item::findOrFail($id);

        $added = Cart::AddToCart($item);

        if (!$added) {
            return redirect()->route('shop')->with('error', 'Failed to add item to cart. Please login first.');
        }

        return redirect()->route('shop')->with('success', 'Item added to cart!');
    }

    public function checkout($id)
    {
        if(Auth::user() == null){
            return redirect()->route('login')->with('error', 'Please login to checkout.');
        }

        $item = \App\Models\Item::findOrFail($id);

        // Remove item from cart after checkout
        $cart_removed = Cart::RemoveFromCart($id);
        if (!$cart_removed) {
            return redirect()->route('home')->with('error', 'Failed to remove item from cart.');
        }

        return redirect(route('cart'))->with('success', 'Checkout successful! Item removed from cart.');
    }
}
