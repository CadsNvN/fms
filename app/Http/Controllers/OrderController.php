<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function store(Request $request) {
        $user = auth()->user();

        $order = [
            'user_id' => $user->id,
            'order_number' => uniqid(),
            'total_due' =>$request->total_due,
        ];

        $createdOrder = Order::create($order);

        // if ($createdOrder) {

        //     $orderItems = [
        //         'order_id' => $$createdOrder->id,
        //         'product_id' 
        //         'quantity'
        //         'unit_price'
        //         'total_price'
        //     ];




        //     return redirect()->back()->with('success', 'Order Successfull');
        // }

    }

    public function currentOrders() {
        return view('orders.current');
    }
    public function completedOrders() {
        return view('orders.completed');
    }
}
