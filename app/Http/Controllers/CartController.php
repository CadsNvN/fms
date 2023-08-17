<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index() {

        if (auth()->check()) {
            $user = auth()->user();
    
            // $cartItems = $user->carts->load('product');
            // $cartItems = $user->carts->where('product.status', 'active')->load('product');
            $cartItems = $user->carts->where('status', 'active')->load('product');

    
            $total_due = 0;
            foreach ($cartItems as $item) {
                $total_due += $item->total_amount;
            }
    
            return view('cart.index', [
                'items' => $cartItems,
                'total_due' => $total_due
            ]);
        }
    
        return redirect()->route('login')->with('error', 'Please log in to view your cart.');
    }

    public function addToCart(Request $request, Product $product) {
        $userId = auth()->user()->id;
    
        $cartItem = Cart::where('user_id', $userId)->where('product_id', $product->id)->first();
    
        if ($cartItem) {
            $cartItem->update(['quantity' => $cartItem->quantity + 1]);
            $cartItem->update(['total_amount' => $product->price * $cartItem->quantity]);
            return redirect()->route('product.browse')->with('success', 'Product has been added to cart.');
        } else {
            
            $item = [
                'product_id' => $product->id,
                'user_id' => $userId,
                'quantity' => 1, 
                'total_amount' => $product->price
            ];

            $addedToCart = Cart::create($item);

            if ($addedToCart) {
                return redirect()->route('product.browse')->with('success', 'Product has been added to cart.');
            } else {
                return redirect()->route('product.browse')->with('error', 'Unable to add product.');
            }
        }
    }

    public function addQuantity($cartId) {
        $cart = Cart::find($cartId);

        $product = Product::where('id', $cart->product_id)->first();
        $price = $product->price;

        $cart->quantity = $cart->quantity + 1;
        $cart->total_amount = $cart->total_amount + $price;
        $addedQuantity = $cart->save();

        if ($addedQuantity) 
        {
            return redirect()->route('cart.index')->with('success', 'Quantity Added');
        } else {
            return redirect()->route('cart.index')->with('error', 'Unable to Add');
        }

    }

    public function subtractQuantity($cartId) {
        $cart = Cart::find($cartId);

        $product = Product::where('id', $cart->product_id)->first();
        $price = $product->price;

        if ($cart->quantity > 1) 
        {
            $cart->quantity = $cart->quantity - 1;
            $cart->total_amount = $cart->total_amount - $price;
            $addedQuantity = $cart->save();

            if ($addedQuantity) 
            {
                return redirect()->route('cart.index')->with('success', 'Quantity Deducted');
            } else {
                return redirect()->route('cart.index')->with('error', 'Unable to Deducted');
            }
        } else {
            return back()->with('error', 'Reached the minimum quantity fo this Item');
        }
    } 

    public function destroy($cartId) {
        try {
            $cart = Cart::findOrFail($cartId);
            $cart->delete(); 
            return redirect()->back()->with('success', 'Item deleted successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Error deleting item: ' . $e->getMessage());
        }
    }

}
