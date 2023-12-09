<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;

class TestController extends Controller
{
    public function index()
    {
        $products = Products::all();
        // var_dump($products);die;
        return view('test.index', compact('products'));
    }

}
