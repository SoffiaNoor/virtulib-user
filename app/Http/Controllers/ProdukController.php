<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Products;
use App\Models\Produk_Pesan;
use App\Models\Produk_Dikirim;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;


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

    public function test(Request $request)
    {
        $products = Produk_Pesan::all();

        return view("seller.produk.test", compact('products'));
    }

    public function moveProduct(Request $request, $productId)
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
        $products = Products::find($_id);

        if (!$products) {
            return redirect()->route('produk.index')->with('error', 'Produk tidak ditemukan!');
        }
        $image = $products->image;
        $destinationPath = public_path('uploads/produk/');
        $profileImage = "produk" . "-" . date('YmdHis') . "." . $image->getClientOriginalExtension();
        
        $filePath = $destinationPath . $profileImage;
        
        if (file_exists($filePath)) {
            unlink($filePath);
            echo "File berhasil dihapus.";
        } else {
            echo "File tidak ditemukan.";
        }
        

        $products->delete();

        return redirect()->route('produk.index')->with('success', 'Produk berhasil dihapus!');
    }

    public function store(Request $request)
    {
        try {
            $input = $request->all();

            if ($image = $request->file('image')) {
                $destinationPath = 'uploads/produk/';
                $profileImage = "produk" . "-" . date('YmdHis') . "." . $image->getClientOriginalExtension();
                $image->move($destinationPath, $profileImage);
                $input['image'] = "$profileImage";
            }

            $data = [
                '_id' => (string) Str::uuid(), 
                'seller_id' => Auth::user()->_id,
                'name' => $request->input('name'),
                'image' => $profileImage,
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


    public function update(Request $request, $_id, Products $products)
    {
        try {
            
            $input = $request->all();
            // var_dump($input);die;

            if ($image = $request->file('image')) {
            $previousImage = $products->image;
            if ($previousImage && file_exists(public_path('uploads/produk/' . $previousImage))) {
                unlink(public_path('uploads/produk/' . $previousImage));
            }
    
            $destinationPath = 'uploads/produk';
            $profileImage = "produk" . "-" . date('YmdHis') . "." . $image->getClientOriginalExtension();
            $image->move($destinationPath, $profileImage);
            $input['image'] = $profileImage;
        } else {
            unset($input['image']);
        }

            $data = [
                'name' => $request->input('name'),
                'image' => $profileImage,
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
