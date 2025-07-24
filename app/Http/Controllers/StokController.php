<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Stok;
use App\Models\Product;
use App\Models\Mutasi;

class StokController extends Controller
{
     /** Tampilkan histori tambah stok + modal */
    public function index()
    {
        $products = Product::all();                    // dropdown produk lama
        $stoks    = Stok::with('product')->latest()->get(); // histori

        return view('admin.stok', compact('products','stoks'));
    }

    // Simpan penambahan stok & catat mutasi otomatis
    public function store(Request $request)
    {
        $request->validate([
            'product_id' => 'required|exists:products,id',
            'qty'        => 'required|integer|min:1',
            'tanggal'    => 'required|date',
        ]);

        DB::transaction(function () use ($request) {    // Mulai transaksi DB biar proses berjalan serentak (tambah stok, update produk, catat mutasi)

            // 1. simpan ke tabel stok
            $stok = Stok::create($request->all());

            // 2. update stok produk
            $product        = Product::find($request->product_id);
            $product->stok += $request->qty;
            $product->save();

            // 3. catat ke mutasi (barang masuk)
            Mutasi::create([
                'product_id'        => $request->product_id,
                'qty'               => $request->qty,
                'jenis_mutasi'      => 'M',
                'keterangan_mutasi' => $request->keterangan, // ambil dari inputan, akunyariiinnnnn
                'tanggal_mutasi'    => $request->tanggal,
            ]);
        });

        return back()->with('success','Stok berhasil ditambahkan');
    }
}
