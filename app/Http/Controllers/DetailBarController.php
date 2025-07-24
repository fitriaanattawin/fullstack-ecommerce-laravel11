<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class DetailBarController extends Controller
{
    public function detail($id)
    {
         $product = Product::findOrFail($id);
         return view('user.detailbarang', compact('product'));
    }
    public function show($id)
{
    $product = Product::findOrFail($id);
    return view('user.detailbarang', compact('product'));
}
}
