<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use App\Models\Product;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Order;

class AdminDashboardController extends Controller
{
    public function index() {

        $users = User::all();

        $products = Product::all();
        $orders = Order::all();
        

        return view('admin.dashboard', [
            'users' => $users->count(),
            'products' => $products->count(),
            'orders' => $orders->count()
        ]);
    }
}
