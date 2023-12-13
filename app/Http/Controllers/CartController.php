<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class CartController extends Controller
{
    public function index()
    {
        $products = Products::all();
        return view('buyer.cart', compact('products'));
    }
}
