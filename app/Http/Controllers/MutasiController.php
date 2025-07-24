<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mutasi;
use App\Models\Product;
use App\Models\Stok;
use Carbon\Carbon;

class MutasiController extends Controller
{
    public function index()
    {
        $products = Product::all();
        // Ambil data mutasi terbaru beserta relasi produk
        $mutasi = Mutasi::with('product')->latest()->get();

        return view('admin.mutasi', compact('mutasi', 'products'));
    }

   public function store(Request $request)
{
    $request->validate([
        'product_id' => 'required|exists:products,id',
        'qty'        => 'required|integer|min:1',
        'tanggal'    => 'required|date',
        'keterangan' => 'required|string|max:255',
    ]);

    $produk = Product::findOrFail($request->product_id);

    // 1. Simpan ke tabel stok
    Stok::create([
        'product_id' => $request->product_id,
        'qty'        => $request->qty,
        'tanggal'    => $request->tanggal,
        'keterangan' => $request->keterangan,
    ]);

    // 2. Tambah ke stok produk
    $produk->stok += $request->qty;
    $produk->save();

    // 3. Catat mutasi otomatis, keterangan ikut dari stok
    Mutasi::create([
        'product_id'        => $request->product_id,
        'qty'               => $request->qty,
        'jenis_mutasi'      => 'M',
        'keterangan_mutasi' => $request->keterangan,
        'tanggal_mutasi'    => Carbon::parse($request->tanggal),
    ]);

    return back()->with('success', 'Stok berhasil ditambahkan');
}

}
