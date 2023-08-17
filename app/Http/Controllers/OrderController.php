<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Order;
use App\Models\OrderItems;
use Illuminate\Http\Request;
use Dompdf\Dompdf;
use Illuminate\Support\Facades\View;

class OrderController extends Controller
{

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


    public function generateReceipt($orderId) {

        $order = Order::with('orderItems')->findOrFail($orderId);

        $view = View::make('receipt', ['order' => $order]);
        $html = $view->render();

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        return $dompdf->stream('receipt.pdf'); 
    }

    

    public function currentOrders() {
        return view('orders.current');
    }
    public function completedOrders() {
        return view('orders.completed');
    }
}
