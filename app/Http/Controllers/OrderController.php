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

        $cartItem = Cart::where('user_id', auth()->user()->id)->where('status', 'active')->get();

        if (count($cartItem) == 0) {
            return redirect()->back()->with('error', 'Your cart is empty. Add items to your cart before placing an order.');
        }

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
                    $cartItem = Cart::where('product_id', $productIds[$i])->where('status', 'active')->first();   
                    if ($cartItem) {

                        $cartItem->status = "ordered";
                        $cartItem->save();
                    }
                }
            }
    
            return redirect()->route('order.index')->with('success', 'Order Successful');
        } else {
            return redirect()->back()->with('error', 'Failed to create order');
        }
    }

    public function destroy($orderId) {
        try {
            $order = Order::findOrFail($orderId);
            $order->delete(); 
            return redirect()->back()->with('success', 'Order deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error deleting Order: ' . $e->getMessage());
        }
    }

    public function currentOrders() {

        $order = Order::where('status', 'pending')->get();
        return view('orders.current', [
            'orders' => $order
        ]);

    }

    public function completedOrders() {

        $order = Order::where('status', 'confirmed')->get();
        return view('orders.completed', [
            'orders' => $order,
        ]);
    }

    public function processOrder($orderId) {

        $order = Order::find($orderId);

        $customer = $order->user->profile;

        $order_items = $order->orderItems;

        $products = [];
        foreach($order_items as $item) {
            if ($item->product) {
                $products[] = $item->product;
            }
        }

        return view('orders.process-order', [
            'order' => $order,
            'customer' => $customer,
            'products' => $products,
            'order_items' => $order_items
        ]);
    }

    public function confirmOrder(Request $request, $orderId) {
        try {

            $order = Order::findOrFail($orderId);

            $order->status = 'confirmed';
            $order->payment_method = $request->payment_method;
            $order->ammount_recived = $request->amount_recieved;
            $order->change = $request->amount_recieved - $order->total_due;
            $order->payment_date = $request->payment_date;
            $order->paid_by = $request->first_name . ' ' . $request->last_name;

            $order->save(); 

            return redirect()->back()->with('success', 'Order confirmed successfully.');

        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error confirming Order: ' . $e->getMessage());
        }
    }



}
