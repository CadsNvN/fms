<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class ProductController extends Controller
{
    public function index () {

    }

    public function create () {
        return view('products.create', [
            'categories' => Category::all()
        ]);
    }

    public function store(Request $request) {
        // dd($request->all());

        $productFields = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'category_id' => 'required'
        ]);

        Product::create($productFields);

        return back()->with('message', 'Product has been added.');

    }
}
