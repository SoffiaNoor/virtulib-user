<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cart;
use App\Models\Order;
use Illuminate\Support\Str;
use App\Models\Buyer;
use Illuminate\Support\Facades\Auth;

class OrderController extends Controller
{
    public function tolongdong(Request $request, $id)
    {
        $cartItem = Cart::findOrFail($id);
        $totalQuantity = intval($request->input('total_quantity'));
        $intPrice = intval($cartItem->product->price);
        $totalPrice = $totalQuantity * $intPrice;
    
        $userBalance = Buyer::where('user_id', Auth::id())->value('balance');
    
        if ($userBalance < $totalPrice) {
            return redirect()->back()->with('error', 'Saldo anda tidak cukup');
        }
    
        $order = new Order();
        $order->_id = (string) Str::uuid();
        $order->product_id = $cartItem->product->_id;
        $order->user_id = Auth::id();
        $order->total_price = $totalPrice;
        $order->total_quantity = $totalQuantity;
        $order->status = 0;
        $order->save();
    
        $product = $cartItem->product;
        $product->stock -= $totalQuantity; 
        $product->save();
    
        $newBalance = $userBalance - $totalPrice;
        Buyer::where('user_id', Auth::id())->update(['balance' => $newBalance]);
    
        $cartItem->delete();
    
        return redirect()->back()->with('success', 'Item moved to checked cart successfully.');
    }
}
