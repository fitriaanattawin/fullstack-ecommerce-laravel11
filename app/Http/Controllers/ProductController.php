<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::all();
        return view('admin.table', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.form');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_produk' => 'required',
            'kategori' => 'required|string',
            'harga' => 'required|numeric',
            'qty' => 'required|string|unique:products,qty',
            'stok' => 'required|numeric',
            'deskripsi' => 'nullable',
            'gambar' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);
    
        $gambar = time().'.'.$request->gambar->extension();
        $request->gambar->move(public_path('images'), $gambar);
    
        Product::create([
            'nama_produk' => $request->nama_produk,
            'kategori' => $request->kategori,
            'harga' => $request->harga,
            'qty' => $request->qty,
            'stok' => $request->stok,
            'deskripsi' => $request->deskripsi,
            'gambar' => $gambar,
        ]);
    
    return redirect()->back()->with('success', 'Data berhasil disimpan!');
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        
        // Menghapus gambar produk (jika ada)
        if ($product->gambar) {
            $gambarPath = public_path('images/' . $product->gambar);
            if (file_exists($gambarPath)) {
                unlink($gambarPath); 
            }
        }
    
        // Menghapus data produk dari database
        $product->delete();
        return redirect()->route('admin.index')->with('success', 'Produk berhasil dihapus');
    }
    

// Form edit
public function edit($id)
{
    $product = Product::findOrFail($id);
    return view('admin.edit', compact('product'));
}

// Simpan update
public function update(Request $request, $id)
{
    $product = Product::findOrFail($id);

    // Validasi lainnya...

    // Cek apakah ada file baru
    if ($request->hasFile('gambar')) {
        $file = $request->file('gambar');
        $filename = time() . '_' . $file->getClientOriginalName();
        $file->move(public_path('images'), $filename);

        // Hapus gambar lama jika ada
        if ($product->gambar && file_exists(public_path('images/' . $product->gambar))) {
            unlink(public_path('images/' . $product->gambar));
        }

        // Simpan nama gambar baru
        $product->gambar = $filename;
    }

    // Update field lainnya
    $product->nama_produk = $request->nama_produk;
    $product->kategori = $request->kategori;
    $product->qty = $request->qty;
    $product->stok = $request->stok;
    $product->deskripsi = $request->deskripsi;
    $product->harga = $request->harga;
    $product->save();

    return redirect()->route('admin.index')->with('success', 'Produk berhasil diupdate.');
}

}