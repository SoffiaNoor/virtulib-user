<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use App\Models\Mahasiswa;
// use App\Models\Dosen;
use App\Models\Products;


class ProdukController extends Controller
{
    public function index()
    {
        
        $products = Products::paginate(5);
        return view("seller.produk.index", compact('products'));
    }

    public function create()
    {
        
        return view("seller.produk.create");
    }

    public function show(string $_id)
    {
        $products = Products::where('_id', $_id)->first();
        return view("seller.produk.show", compact('products'));
    }

    public function edit(string $_id)
    {
        $products = Products::where('_id', $_id)->first();
        return view("seller.produk.edit", compact('products'));
    }

    public function destroy($_id)
    {
        $products = Products::where('_id', $_id)->first();
        if (!$products) {
            return redirect()->route('produk.index')->with('error', 'Produk tidak ditemukan!');
        }

        $products->delete();
        return redirect()->route('produk.index')->with('success', 'Produk berhasil dihapus!');
    }

    public function store(Request $request)
    {
            try {
                $data = [
                    'name' => $request->input('name'),
                    'seller' => $request->input('seller'),
                    'gambar' => $request->input('gambar'),
                    'description' => $request->input('description'),
                    'price' => $request->input('price'),
                    'stock' => $request->input('stock')
                ];
        
                Products::create($data);
        
                return redirect()->route('produk.index')->with('success', 'Mahasiswa berhasil ditambah!');
            } catch (\Exception $e) {
                return redirect()->route('produk.create')->with('error', 'Gagal input Mahasiswa. Pastikan data yang Anda masukkan benar.');
            }
        }

    
    public function update(Request $request, $_id){
        try {
            $data = [
                'name' => $request->input('name'),
                'seller' => $request->input('seller'),
                'gambar' => $request->input('gambar'),
                'description' => $request->input('description'),
                'price' => $request->input('price'),
                'stock' => $request->input('stock')
            ];
    
            Products::where('_id', $_id)->update($data);
    
            return redirect()->route('produk.index')->with('success', 'Mahasiswa berhasil ditambah!');
        } catch (\Exception $e) {
            return redirect()->route('produk.create')->with('error', 'Gagal input Mahasiswa. Pastikan data yang Anda masukkan benar.');
        }
    }

}
