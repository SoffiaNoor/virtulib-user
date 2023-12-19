<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Buyer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Cart;

class BuyerController extends Controller
{
    public function index()
    {
        $products = Products::all();

        return view('buyer.detail', compact('products'));
    }

    public function welcome()
    {
        $products = Products::all();

        return view('welcome', compact('products'));
    }
    public function detail($id)
    {
        $products = Products::find($id);

        return view('buyer.detail', compact('products'));
    }

    public function buyNow(Request $request, $id)
    {
        $product = Products::find($id);

        $order = new Cart();
        $order->product_id = $product->id;
        $order->user_id = auth()->user()->id;
        $order->quantity = 1;
        $order->total_price = $product->price; 

        $order->save();
        return redirect()->route('buyer.cart', ['_id' => $order->_id]);
    }

    public function profile()
    {
        $login = Auth::user()->_id;
        $profil = Buyer::find($login);
        return view('buyer.profil', compact('profil'));
    }

}
