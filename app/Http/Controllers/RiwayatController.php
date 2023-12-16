<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produk_Pesan;
use App\Models\Produk_Dikirim;
use App\Models\Produk_Selesai;
use App\Models\Penjualan;

class RiwayatController extends Controller
{
    public function pesanan()
    {
        $products = Produk_Pesan::all();
        return view("riwayat.pesanan", compact('products'));
    }

    public function pengiriman()
    {
        $products = Produk_Dikirim::all();
        return view("riwayat.pengiriman", compact('products'));
    }

    public function selesai()
    {
        $products = Produk_Selesai::all();
        return view("riwayat.selesai", compact('products'));
    }

    public function moveProductPesanan(Request $request, $productId)
    {
        // Get the product based on the provided ID
        $product = Produk_Pesan::find($productId);

        if (!$product) {
            // Handle the case where the product is not found
            return redirect()->back()->with('error', 'Product not found.');
        }

        // Create a new record in the MovedProducts collection
        Produk_Dikirim::create([
            'name' => $product->name,
            'price' => $product->price,
            // Add other fields as needed
        ]);

        // Remove the product from the Products collection
        $product->delete();

        // Redirect back to the original page with a success message
        return redirect()->back()->with('success', 'Product moved successfully.');
    }
    public function moveProductPengiriman(Request $request, $productId)
    {
        // Get the product based on the provided ID
        $product = Produk_Dikirim::find($productId);

        if (!$product) {
            // Handle the case where the product is not found
            return redirect()->back()->with('error', 'Product not found.');
        }

        // Create a new record in the MovedProducts collection
        Produk_Selesai::create([
            'name' => $product->name,
            'price' => $product->price,
            // Add other fields as needed
        ]);

        // Remove the product from the Products collection
        $product->delete();

        // Redirect back to the original page with a success message
        return redirect()->back()->with('success', 'Product moved successfully.');
    }
    public function moveProductSelesai(Request $request, $productId)
    {
        // Get the product based on the provided ID
        $product = Produk_Selesai::find($productId);

        if (!$product) {
            // Handle the case where the product is not found
            return redirect()->back()->with('error', 'Product not found.');
        }

        // Create a new record in the MovedProducts collection
        Penjualan::create([
            'name' => $product->name,
            'price' => $product->price,
            // Add other fields as needed
        ]);

        // Remove the product from the Products collection
        $product->delete();

        // Redirect back to the original page with a success message
        return redirect()->back()->with('success', 'Product moved successfully.');
    }
}
