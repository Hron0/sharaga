<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\CartItem;
use App\Models\Guitars;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function add(Request $request, Guitars $product)
    {
        $user = Auth::user();
        $cart = $user->cart ?? new Cart(['user_id' => $user->id]);
        $cart->save();

        $cartItem = new CartItem([
            'cart_id' => $cart->id,
            'product_id' => $product->id,
            'quantity' => $request->quantity,
        ]);
        $cartItem->save();

        return redirect()->back()->with('success', 'Product added to cart successfully.');
    }

    public function show()
    {
        $user = Auth::user();
        $cart = $user->cart;

        if (!$cart) {
            return view('basket', ['items' => []]);
        }

        $items = $cart->items;

        return view('basket', compact('items'));
    }
}
