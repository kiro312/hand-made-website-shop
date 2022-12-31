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
use App\Models\Category;

class MainPageController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        $items = Item::all();
        $categories = Category::all();

        $cartItems = ShoppingCart::where(['user_id' => Auth::id()])->get('item_id');

        return view('User.main-page.main-page', compact('user', 'items', 'cartItems', 'categories'));
        // return view('User.main-page.main-page')->with('items', json_decode($items, true));
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

    public function getUserOrders($key)
    {
        $orders = Order::where(['user_id' => Auth::id()])->orderBy('created_at', 'desc')->get();
        if ($key == "pending") {
            return view('User.order.pending-order', compact('orders'));
        } else {
            return view('User.order.confirmed-order', compact('orders'));
        }
    }

    public function searchBar(Request $request)
    {
        $user = Auth::user();
        $items = Item::where('item_name', 'LIKE', "%{$request->key}%")->orwhere('item_description', 'LIKE', "%{$request->key}%")->get();
        $cartItems = ShoppingCart::where(['user_id' => Auth::id()])->get('item_id');
        $categories = Category::all();

        return view('User.main-page.main-page', compact('user', 'items', 'cartItems', 'categories'));
    }

    public function searchByCategory(Request $request)
    {
        $user = Auth::user();
        $items = Category::find($request->categories)->items()->get();
        $cartItems = ShoppingCart::where(['user_id' => Auth::id()])->get('item_id');
        $categories = Category::all();

        return view('User.main-page.main-page', compact('user', 'items', 'cartItems', 'categories'));
    }
}
