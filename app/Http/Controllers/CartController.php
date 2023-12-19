<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class CartController extends Controller
{
    public function index()
    {
        $cart = Cart::all();
        return view('buyer.cart', compact('cart'));
    }

    public function destroy($id)
    {
        $product_cart = Cart::find($id);

        if (!$product_cart) {
            return redirect()->route('buyer.cart')->with('error', 'Product Not Found!');
        }

        $product_cart->delete();

        return redirect()->route('buyer.cart')->with('success', 'Products already Deleted!');
    }
}
