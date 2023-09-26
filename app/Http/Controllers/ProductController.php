<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use App\Models\Announcement;

class ProductController extends Controller
{

    public function index () {
        return view('products.index', [
            'products' => Product::latest()->paginate(5)
        ]);
    }

    public function create () {
        return view('products.create', [
            'categories' => Category::all()
        ]);
    }

    public function show (Product $product) {
        $category = $product->categories;

        return view('products.show', [
            'product' => $product,
            'category' => $category->first()->name
        ]);
    }

    public function welcomePageProducts () {
        return view('welcome', [
            'announcements' => Announcement::latest()->take(3)->get(),
            'products' => Product::latest()->take(4)->get()
        ]);
    }

    public function browse() {
        return view('products.browse', [
            'products' => Product::latest()->get()
        ]);
    }

    public function store(Request $request) {

        $productFields = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'category_id' => 'required|exists:categories,id'
        ]);

        if($request->hasFile('image')) {
            $productFields['image'] = $request->image->store('productImage', 'public');
        }

        $product  = Product::create($productFields);

        $categoryId = $request->input('category_id');
        $product->categories()->attach($categoryId);

        return redirect()->route('product.index')->with('message', 'Product has been added.');

    }


    public function edit(Product $product) {
        return view('products.edit', [
            'product' => $product,
            'categories' => Category::all()
        ]);
    }

    public function update(Request $request, Product $product) {
        $productFields = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string',
            'price' => 'required|numeric|min:0',
            'stock' => 'required|integer|min:0',
            'category_id' => 'required'
        ]);

        if($request->hasFile('image')) {
            $productFields['image'] = $request->image->store('productImage', 'public');
        }

        $product->update($productFields);

        return redirect()->route('product.index')->with('success', 'Product has been updated.');
    }

    public function destroy($product)
    {
        $product = Product::find($product);

        if (!$product) {
            return redirect()->route('product.index')->with('error', 'Product not found.');
        }

        $product->delete();

        return redirect()->route('product.index')->with('success', 'Product deleted successfully.');
    }
}
