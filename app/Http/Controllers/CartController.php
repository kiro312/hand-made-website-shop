<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ShoppingCart;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function addToCart(Request $request)
    {
        $request->validate([
            'item_id' => 'numeric',
            'item_quantity' => 'numeric'
        ]);

        try {
            ShoppingCart::create(['user_id' => Auth::id(), 'item_id' => $request->item_id, 'item_quantity' => $request->item_quantity]);
            return "Added";
        } catch (\Throwable $th) {
            $messages = $th->getMessage();
            return $messages;
        }
    }

    public function RemoveFromCart(Request $request)
    {
        $request->validate([
            'item_id' => 'numeric',
        ]);

        try {
            $item_in_cart = ShoppingCart::where(['user_id' => Auth::id(), 'item_id' => $request->item_id])->firstOrFail();
            $item_in_cart->delete();
            return "Removed";
        } catch (\Throwable $th) {
            $messages = $th->getMessage();
            return $messages;
        }
    }

    public function changeItemQtInCart(Request $request)
    {
        try {
            $request->validate([
                'item_id' => 'numeric',
                'item_quantity' => 'numeric'
            ]);
            $item_in_cart = ShoppingCart::where(['user_id' => Auth::id(), 'item_id' => $request->item_id])->firstOrFail();
            $item_in_cart->update(['item_quantity' => $request->item_quantity]);
            return "Changed";
        } catch (\Throwable $th) {
            $messages = $th->getMessage();
            return $messages;
        }
    }
}
