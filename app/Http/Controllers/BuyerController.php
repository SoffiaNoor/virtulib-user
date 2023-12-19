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

    public function showProfile()
    {
        $login = Auth::user()->_id;
        $profil = Buyer::where('user_id', $login)->first();
        
        return view('buyer.profil', compact('profil', 'login'));
    }
    public function updateProfile(Request $request, $id)
    {

        try {
            $data = [
                'full_name' => $request->input('name'),
                'address' => $request->input('address'),
                'phone_number' => $request->input('phone_number'),
                'gender' => $request->input('gender'),
                'birthdate' => $request->input('birthdate'),
            ];

            Buyer::where('user_id', $id)->update($data);

            return redirect()->route('profile')->with('success', 'Profil berhasil diubah!');
        } catch (\Exception $e) {
            return redirect()->route('profile')->with('error', 'Gagal mengubah profil. Pastikan data yang Anda masukkan benar.');
        }
    }

}
