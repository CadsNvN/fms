<?php

namespace App\Http\Controllers;

use Dompdf\Dompdf;
use App\Models\Order;
use App\Models\Product;
use App\Models\OrderItems;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class ReceiptController extends Controller
{
    public function index($orderId)
    {
        $order = Order::findOrFail($orderId);
        $orderItems = OrderItems::where('order_id', $order->id)->with('product')->get();

        $products = [];

        foreach ($orderItems as $item) {
            if ($item->product) {
                $products[] = $item->product;
            }
        }

        return view('receipt', [
            'order' => $order,
            'orderItems' => $orderItems,
        ]);
    }
    public function generateReceipt($orderId)
    {

        $order = Order::findOrFail($orderId);
        $orderItems = OrderItems::where('order_id', $order->id)->with('product')->get();

        $products = [];

        foreach ($orderItems as $item) {
            if ($item->product) {
                $products[] = $item->product;
            }
        }


        $view = View::make('receipt', ['order' => $order, 'orderItems' => $orderItems, 'products' => $products]);
        $html = $view->render();

        $dompdf = new Dompdf();
        $dompdf->loadHtml($html);

        $dompdf->set_option('isHtml5ParserEnabled', true);
        $dompdf->setPaper('A4', 'portrait');
        $dompdf->render();

        return $dompdf->stream('receipt.pdf');
    }
}
