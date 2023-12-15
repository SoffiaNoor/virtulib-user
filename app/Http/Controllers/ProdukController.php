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
        // $mahasiswa = Mahasiswa::paginate(5);

        // return view("mahasiswa.index", compact('mahasiswa'));
        return view("seller.produk.index");
    }

    public function create()
    {
        
        return view("seller.produk.create");
    }

    public function show(string $NRP)
    {
        $mahasiswa = Mahasiswa::where('NRP', $NRP)->first();
        $dosen = Dosen::all();
        return view("mahasiswa.view", compact('mahasiswa', 'dosen'));
    }
    public function edit(Mahasiswa $mahasiswa)
    {
        $dosenWali = Dosen::all();
        return view("mahasiswa.update", compact('mahasiswa', 'dosenWali'));
    }

    public function destroy($NRP)
    {
        $mahasiswa = Mahasiswa::find($NRP);

        if (!$mahasiswa) {
            return redirect()->route('mahasiswa.index')->with('error', 'Mahasiswa tidak ditemukan!');
        }

        $mahasiswa->delete();

        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil dihapus!');
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

    public function update(Request $request, Mahasiswa $mahasiswa)
    {
        $this->validate($request, [
            'NamaMhs' => 'required|string',
            'Alamat' => 'required|string',
            'IDDosen' => 'required|max:5|string',
            'IPK' => 'required|numeric|max:4|min:0',
            'JenisKelamin' => 'required|string',
        ], [
            'IPK.max' => 'IPK harus kurang dari atau sama dengan :max.',
            'IPK.min' => 'IPK harus lebih dari atau sama dengan :min.',
        ]);

        $mahasiswa->update($request->all());

        return redirect()->route('mahasiswa.index')->with('success', 'Mahasiswa berhasil diperbarui!');

    }

}
