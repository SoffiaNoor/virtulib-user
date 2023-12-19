<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Buyer;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use App\Models\Cart;
use App\Models\Order;

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
        $products_id = $products->seller_id;
        // var_dump($products_id);die;
        $products_recommendation = Products::where('seller_id', $products_id)->get();

        return view('buyer.detail', compact('products', 'products_recommendation'));
    }

    public function buyNow(Request $request, $id)
    {
        $product = Products::find($id);

        $existingCart = Cart::where('user_id', Auth::id())
            ->where('product_id', $product->id)
            ->first();

        if ($existingCart) {
            $existingCart->quantity += 1;
            $existingCart->total_price = $existingCart->quantity * $product->price;
            $existingCart->save();

            $order = $existingCart;
        } else {
            $order = new Cart();
            $order->product_id = $product->id;
            $order->user_id = Auth::id();
            $order->quantity = 1;
            $order->total_price = $product->price;
            $order->save();
        }

        return redirect()->route('buyer.cart', ['_id' => $order->_id]);
    }

    public function buytoCart(Request $request, $id)
    {
        $product = Products::find($id);

        $existingCart = Cart::where('user_id', Auth::id())
            ->where('product_id', $product->id)
            ->first();

        if ($existingCart) {
            $existingCart->quantity += 1;
            $existingCart->total_price = $existingCart->quantity * $product->price;
            $existingCart->save();

            $order = $existingCart;
        } else {
            $order = new Cart();
            $order->product_id = $product->id;
            $order->user_id = Auth::id();
            $order->quantity = 1;
            $order->total_price = $product->price;
            $order->save();
        }

        return redirect()->route('detail', ['id' => $product->id]);
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

    public function updatePhotoProfile(Request $request, $id)
    {

        try {
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $destinationPath = 'uploads/buyer';
                $imageName = "buyer" . "-" . date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $imageName);
                $data['image'] = $imageName;
            }

            Buyer::updateOrCreate(['user_id' => $id], $data);

            return redirect()->route('profile')->with('success', 'Profil berhasil diubah!');
        } catch (\Exception $e) {
            return redirect()->route('profile')->with('error', 'Gagal mengubah profil. Pastikan data yang Anda masukkan benar.');
        }
    }

    public function deletePhotoProfile($id)
    {

        $buyer = Buyer::where('user_id', $id)->first();

        if (!$buyer) {
            return redirect()->route('profile')->with('error', 'Profil tidak ditemukan!');
        }

        $image = $buyer->image;

        if ($image) {
            $destinationPath = public_path('uploads/buyer/');
            $filePath = $destinationPath . $image;

            try {
                if (file_exists($filePath)) {
                    unlink($filePath);
                    $data = [
                        'image' => null
                    ];
                    Buyer::where('user_id', $id)->update($data);
                    return redirect()->route('profile')->with('success', 'Gambar profile berhasil dihapus!');
                } else {
                    return redirect()->route('profile')->with('error', 'Gambar profile tidak ditemukan.');
                }
            } catch (\Exception $e) {
                return redirect()->route('profile')->with('error', 'Gagal menghapus gambar profile.');
            }
        }
    }

    public function showOrder()
    {
        $login = Auth::user()->_id;
        $order = Order::where('user_id', $login)->get();
        return view('buyer.order', compact('order'));
    }

    public function showTopup()
    {
        $login = Auth::user()->_id;
        $order = Order::where('user_id', $login)->get();
        $buyer = Buyer::where('user_id', $login)->first();
        return view('buyer.topup', compact('order', 'buyer', 'login'));
    }

    public function updateBalance(Request $request, $id)
    {
        try {
            $currentBalance = Buyer::where('user_id', $id)->value('balance');

            $newBalance = $currentBalance + $request->input('balance');
            Buyer::where('user_id', $id)->update(['balance' => $newBalance]);

            return redirect()->route('profile')->with('success', 'Successfully Update Balance!');
        } catch (\Exception $e) {
            return redirect()->route('profile')->with('error', 'There is some technical error with the server');
        }
    }

    public function moveProductPengiriman(Request $request, $orderId)
    {
        $order = Order::find($orderId);

        if (!$order) {
            return redirect()->route('profile')->with('error', 'Error');
        }

        $data = [
            'status' => 2,
        ];

        $order->update($data);
        return redirect()->route('profile')->with('success', 'Thank you For Your Confirmation!');
    }

}