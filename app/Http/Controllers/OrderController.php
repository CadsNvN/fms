<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItems;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function index() {
        $orders = auth()->user()->orders;

        return view('orders.index', [
            'orders' => $orders
        ]);
    }

    public function store(Request $request) {
        $user = auth()->user();
    
        $order = [
            'user_id' => $user->id,
            'order_number' => uniqid(),
            'total_due' => $request->total_due,
        ];
    
        $createdOrder = Order::create($order);
    
        if ($createdOrder) {
            $productIds = $request->product_ids;
            $quantities = $request->quantities;
            $unitPrices = $request->unit_prices;
    
            $orderItems = [];
    
            for ($i = 0; $i < count($productIds); $i++) {
                $orderItems[] = [
                    'order_id' => $createdOrder->id,
                    'product_id' => $productIds[$i],
                    'quantity' => $quantities[$i],
                    'unit_price' => $unitPrices[$i],
                    'total_price' => $quantities[$i] * $unitPrices[$i],
                ];
            }
    
            $orderItemsCreated = OrderItems::insert($orderItems);

            if ($orderItemsCreated) {
                for ($i = 0; $i < count($productIds); $i++) {
                    $cartItem = Cart::find($productIds[$i]);
                    if ($cartItem) {
                        $cartItem->status = "ordered";
                        $cartItem->save();
                    }
                }
            }
    
            return redirect()->back()->with('success', 'Order Successful');
        } else {
            return redirect()->back()->with('error', 'Failed to create order');
        }
    }


    public function currentOrders() {
        return view('orders.current');
    }
    public function completedOrders() {
        return view('orders.completed');
    }
}
