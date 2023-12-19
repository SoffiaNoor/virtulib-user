<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sales;

class PenjualanController extends Controller
{
    public function index()
    {
        $sales = Sales::paginate(5);
        return view("seller.penjualan.index", compact('sales'));
    }

    public function create()
    {

        return view("seller.penjualan.create");
    }
    public function show(string $_id)
    {
        $sales = Sales::find($_id);
        return view("seller.penjualan.detail", compact('sales'));
    }
    public function searchProduk(Request $request)
    {
        $keyword = $request->input('keyword');
        $sales = Sales::where('customer', 'like', "%$keyword%")
            ->orWhere('productname', 'like', "%$keyword%")
            ->paginate(5);

        return view("seller.penjualan.index", compact('sales'));
    }
    public function searchCustomer(Request $request)
    {
        $keyword = $request->input('keyword');
        $sales = Sales::where('customer', 'like', "%$keyword%")
            ->orWhere('productname', 'like', "%$keyword%")
            ->paginate(5);

        return view("seller.penjualan.index", compact('sales'));
    }
    public function destroy($_id)
    {
        $sales = Sales::find($_id);

        if (!$sales) {
            return redirect()->route('penjualan.index')->with('error', 'Data Penjualan tidak ditemukan!');
        }
        
        $sales->delete();
        return redirect()->route('penjualan.index')->with('success', 'Data Penjualan berhasil dihapus!');
    }




}
