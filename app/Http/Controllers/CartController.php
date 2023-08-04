<?php

namespace App\Http\Controllers;

use App\Models\Cart;
use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function index() {

        $user = auth()->user();

        $cartItems = $user->carts->load('product');;

        return view('cart.index', [
            'items' => $cartItems
        ]);
    }

    public function addToCart(Request $request, Product $product) {
        $userId = auth()->user()->id;
    
        $cartItem = Cart::where('user_id', $userId)->where('product_id', $product->id)->first();
    
        if ($cartItem) {
            $cartItem->update(['quantity' => $cartItem->quantity + 1]);
            return redirect()->route('product.browse')->with('success', 'Product has been added to cart.');
        } else {
            
            $item = [
                'product_id' => $product->id,
                'user_id' => $userId,
                'quantity' => 1, 
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

        $cart->quantity = $cart->quantity + 1;

        $addedQuantity = $cart->save();

        if ($addedQuantity) {
            return redirect()->route('cart.index')->with('success', 'Added');
        } else {
            return redirect()->route('cart.index')->with('error', 'Not added');
        }

    }

    public function subtractQuantity($cartId) {
        $cart = Cart::find($cartId);

        $cart->quantity = $cart->quantity - 1;

        $addedQuantity = $cart->save();

        if ($addedQuantity) {
            return redirect()->route('cart.index')->with('success', 'Subtracted');
        } else {
            return redirect()->route('cart.index')->with('error', 'Not Subtracted');
        }

    }
    
}
