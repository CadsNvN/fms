<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function currentOrders() {
        return view('orders.current');
    }
    public function completedOrders() {
        return view('orders.completed');
    }
}
