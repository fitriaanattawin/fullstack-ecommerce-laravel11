<?php

namespace App\Http\Controllers;
use App\Models\Cart;
use App\Models\Product;

use Illuminate\Http\Request;

class AdminCartController extends Controller
{
     public function index()
    {
        $cartItems = Cart::with(['user', 'product'])->latest()->get();
        return view('admin.cart.index', compact('cartItems'));
    }
}
