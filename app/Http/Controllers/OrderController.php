<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\ShoppingCart;
use App\Models\Order;
use App\Models\OrderItemDetails;
use App\Models\OrderStatuses;
use App\Models\Item;
use App\Models\OrderDetails;

class OrderController extends Controller
{
    public function makeOrder(Request $request)
    {
        try {
            // 1 - Create Order and get order id
            $order_id = $this->createOrderID();

            $cart_items = ShoppingCart::where(['user_id' => Auth::id()])->get();
            if ($cart_items->count() == 0) {
                return "no items in cart";
            }

            // 2 - Copy items from Cart to order_item_details table
            $this->copyItemsFromCartToOrder($order_id, $cart_items);

            // 3 - get order staues 1
            $order_statuses_id = OrderStatuses::first()->id;


            // 4 - get order total price
            $total_price =  $this->calcItemsTotalPrice($order_id);

            // 5 - create order details
            OrderDetails::create([
                'order_id' => $order_id,
                'payment_method_id' => $request->payment_method_id,
                'order_status_id' => $order_statuses_id,
                'total_price' => $total_price
            ]);

            return "Order Created";
        } catch (\Throwable $th) {
            $messages = $th->getMessage();
            return $messages;
        }
    }

    private function createOrderID()
    {
        try {
            $order = Order::create(['user_id' => Auth::id()]);
            return $order->id;
        } catch (\Throwable $th) {
            $messages = $th->getMessage();
            return $messages;
        }
    }

    private function copyItemsFromCartToOrder($order_id, $cart_items)
    {
        try {
            foreach ($cart_items as $cart_item) {
                OrderItemDetails::create([
                    'order_id' => $order_id,
                    'item_id' => $cart_item->item_id,
                    'item_quantity' => $cart_item->item_quantity,
                ]);
            }

            ShoppingCart::where(['user_id' => Auth::id()])->delete();
        } catch (\Throwable $th) {
            $messages = $th->getMessage();
            return $messages;
        }
    }

    private function calcItemsTotalPrice($order_id)
    {
        $total = 0;
        try {
            $order_items = OrderItemDetails::where(['order_id' => $order_id])->get();

            foreach ($order_items as $order_item) {
                $item_price = Item::find($order_item->item_id)->item_price * $order_item->item_quantity;
                $total += $item_price;
            }
            return $total;
        } catch (\Throwable $th) {
            $messages = $th->getMessage();
            return $messages;
        }
    }

    public function getAllWaitingOrdersForAdmin()
    {
        $order_statuses_id = OrderStatuses::first()->id;
        $orders = OrderDetails::where(['order_status_id' => $order_statuses_id])->get();
        return view('Admin.orders.index', compact('orders'));
    }

    public function confirmOrder(OrderDetails $order)
    {
        $order->order_status_id = 2;
        $order->save();
        return redirect()->route('order.getAllWaitingOrdersForAdmin');
    }
}
