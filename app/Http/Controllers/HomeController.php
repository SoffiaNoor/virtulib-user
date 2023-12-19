<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use App\Models\Penjualan;


class HomeController extends Controller
{
    public function index()
    {
        $topSales = Penjualan::orderBy('totalpurchase', 'desc')->take(3)->get();    

         $chartData = [];
            foreach ($topSales as $sale) {
                $chartData[$sale->productName] = $sale->totalPurchase;
                
            }

        return view("seller.index", compact('chartData'));
    }
}
