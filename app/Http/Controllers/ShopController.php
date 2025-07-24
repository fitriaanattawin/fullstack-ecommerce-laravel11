<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function indexx()
    {
        return view('user.shop');
    }
    public function index(Request $request)
{
   // Cek apakah ada filter kategori
    if ($request->has('kategori') && $request->kategori != '') {
        $products = Product::where('kategori', $request->kategori)->get();
    } else {
        $products = Product::all(); // Tanpa filter, ambil semua
    }

    return view('user.shop', compact('products'));
}

}
