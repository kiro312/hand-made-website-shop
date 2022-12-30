<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Item;
use App\Models\ShoppingCart;
use App\Models\Payment;
use App\Models\Order;
use App\Models\OrderDetails;
use App\Models\OrderItemDetails;
use App\Models\OrderStatuses;

class MainPageController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $items = Item::all();
        $cartItems = ShoppingCart::where(['user_id' => Auth::id()])->get('item_id');

        return view('User.main-page.main-page', compact('user', 'items', 'cartItems'));
    }

    public function getUserCart()
    {
        $cartItems = ShoppingCart::where(['user_id' => Auth::id()])->get();
        $payments = Payment::all();
        $items = array();
        foreach ($cartItems as $cartItem) {
            $item = Item::find($cartItem->item_id);
            array_push($items, $item);
        }
        return view('User.Cart.cart', compact('cartItems', 'items', 'payments'));
    }

    public function getUserPendingOrders()
    {
        $orders = Order::where(['user_id' => Auth::id()])->orderBy('created_at', 'desc')->get();
        return view('User.order.order', compact('orders'));
    }
}
