<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use App\Models\Buyer;
use Illuminate\Support\Facades\Auth;



class BuyerController extends Controller
{
    public function index()
    {
        $products = Products::all();

        return view('buyer.detail', compact('products'));
    }

    public function welcome()
    {
        $products = Products::all();

        return view('welcome', compact('products'));
    }
    public function detail($id)
    {
        $products = Products::find($id);

        return view('buyer.detail', compact('products'));
    }

    public function showForm()
    {
        $loggedInUser = Auth::user();
        $buyerData = $loggedInUser->buyer;

        var_dump($buyerData);die;

        return view('buyer.test', compact('loggedInUser', 'muridData'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'namasekolah' => 'required|string',
            'gender' => 'required|string',
            'tanggallahir' => 'required|date',
        ]);

        $user = Auth::user();

        $murid = $user->murid ?? new Buyer();
        $murid->namasekolah = $request->input('namasekolah');
        $murid->gender = $request->input('gender');
        $murid->tanggallahir = $request->input('tanggallahir');

        $user->buyer()->save($murid);

        return redirect()->route('home')->with('success', 'Murid data saved successfully!');
    }
}
