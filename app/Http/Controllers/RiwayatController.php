<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk_Pesan;
use App\Models\Produk_Dikirim;
use App\Models\Produk_Selesai;
use App\Models\Penjualan;
use App\Models\Order;

class RiwayatController extends Controller
{
    public function pesanan()
    {
        $products = Order::where('status', 0)->get();
        return view("riwayat.pesanan", compact('products'));
    }

    public function pengiriman()
    {
        $products = Order::where('status', 1)->get();
    return view("riwayat.pesanan", compact('products'));
    }

    public function selesai()
    {
        $products = Order::where('status', 2)->get();
        return view("riwayat.pesanan", compact('products'));
    }

    public function moveProductPesanan(Request $request, $orderId)
    {
        $order = Order::find($orderId);

        if (!$order) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        $data = [
            'status' => 1,
        ];

        $order->update($data);
        return redirect()->back()->with('success', 'Product moved successfully.');
    }
    public function moveProductPengiriman(Request $request, $orderId)
    {
        $order = Order::find($orderId);

        if (!$order) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        $data = [
            'status' => 2,
        ];

        $order->update($data);
        return redirect()->back()->with('success', 'Product moved successfully.');
    }
    public function moveProductSelesai(Request $request, $productId)
    {
        $product = Produk_Selesai::find($productId);

        if (!$product) {
            return redirect()->back()->with('error', 'Product not found.');
        }

        Penjualan::create([
            'name' => $product->name,
            'price' => $product->price,
        ]);

        $product->delete();

        return redirect()->back()->with('success', 'Product moved successfully.');
    }
}
