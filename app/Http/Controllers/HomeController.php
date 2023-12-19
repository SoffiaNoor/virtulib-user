<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sales;
use App\Models\Products;


class HomeController extends Controller
{
    public function index()
    {
        $topSales = Sales::orderBy('total_purchase', 'desc')->take(3)->get();

        $chartData = [];
        foreach ($topSales as $sale) {
            $product = Products::find($sale->product_id);
            $productName = $product ? $product->name : "Unknown Product";
            $chartData[$productName] = $sale->total_purchase;
        }

        return view("seller.index", compact('chartData'));
    }
}
