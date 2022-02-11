<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    //
    public function cart()
    {
        //dd(session('cartItems'));
        return view('cart.cart');
    }

    public function addToCart($id)
    {
        $product = Product::findOrFail($id);
        $cartItems = session()->get('cartItems', []);
        if (isset($cartItems[$id])) {
            $cartItems[$id]['quantity']++;
        } else {
            $cartItems[$id] = [
                'image_url' => $product->image_url,
                'name' => $product->name,
                'brand' => $product->brand,
                'detail' => $product->detail,
                'price' => $product->price,
                'quantity' => 1
            ];
        }

        session()->put('cartItems', $cartItems);

        return redirect()->back()->with('success', 'Product added to cart!');
    }

    public function delete(Request $request)
    {
        if ($request->id) {
            $cartItems = session()->get('cartItems');

            if (isset($cartItems[$request->id])) {
                unset($cartItems[$request->id]);
                session()->put('cartItems', $cartItems);
            }
            return redirect()->back()->with('success', 'Product removed from cart');
        }
    }

    public function updateCart(Request $request)
    {
        if ($request->id && $request->quantity) {
            $cartItems = session()->get('cartItems');
            $cartItems[$request->id]['quantity'] = $request->quantity;
            session()->put('cartItems', $cartItems);
        }

        //dd($request->quantity);
        return redirect()->back()->with('success', 'Quantity added to cart');
    }
}
