<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sales;

class PenjualanController extends Controller
{
    public function index(){
        $sales = Sales::all();
        return view("seller.penjualan.index",compact('sales'));
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
}
