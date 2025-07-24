<?php

namespace App\Http\Controllers;
use App\Models\Mutasi;
use Illuminate\Support\Facades\DB;
use App\Models\Pembelian;
use App\Models\PembelianDetail;
use App\Models\Product;
use App\Models\Vendor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class PembelianController extends Controller
{
   public function index()
{
    $pembelians = Pembelian::with(['vendor', 'user', 'details.product'])->get();
    $vendors = Vendor::all();
    $products = Product::all();
    return view('admin.pembelian', compact('pembelians', 'vendors', 'products'));
}
    
     public function create()
    {
        $vendors = Vendor::all();
        $products = Product::all();
        return view('admin.pembelian', compact('vendors', 'products'));
    }
    public function store(Request $request)
{

    $request->validate([
        'nomor_bukti' => 'required',
        'tanggal_pembelian' => 'required|date',
        'vendor_id' => 'required',
        'product_id' => 'required|array',
        'qty' => 'required|array',
        'harga_satuan' => 'required|array',
    ]);

    $pembelian = Pembelian::create([
        'nomor_bukti' => $request->nomor_bukti,
        'tanggal_pembelian' => $request->tanggal_pembelian,
        'vendor_id' => $request->vendor_id,
        'created_by' => Auth::user()->id,
        'keterangan' => 'Pending',
        'total' => 0, // akan diupdate setelah detail dimasukkan
    ]);

    $total = 0;

    foreach ($request->product_id as $i => $product_id) {
        $qty = $request->qty[$i];
        $harga_satuan = $request->harga_satuan[$i];
        $subtotal = $qty * $harga_satuan;

        PembelianDetail::create([
            'pembelian_id' => $pembelian->id,
            'product_id' => $product_id,
            'qty' => $qty,
            'harga_satuan' => $harga_satuan,
            'subtotal' => $subtotal,
        ]);

        $total += $subtotal;
    }

    $pembelian->update(['total' => $total]); // Update total pembelian

    return redirect()->back()->with('success', 'Pembelian berhasil disimpan.');
}
public function storeVendor(Request $request)
{
    $request->validate([
        'nama' => 'required|string|max:255',
        'alamat' => 'nullable|string|max:255',
        'nohp'   => 'nullable|string|max:20',
        'email'  => 'nullable|email|max:255',
    ]);

    Vendor::create([
        'nama' => $request->nama,
        'alamat' => $request->alamat,
        'nohp'   => $request->nohp,
        'email'  => $request->email,
    ]);

    return redirect()->back()->with('success_vendor', 'Vendor berhasil ditambahkan.');
}
    public function approve($id)
{
    $pembelian = Pembelian::with('details')->findOrFail($id);

    $pembelian->update(['keterangan' => 'Approved']);  // Update status pembelian

    foreach ($pembelian->details as $detail) {
        $detail->product->increment('stok', $detail->qty); 
        //=============

        Mutasi::create([
            'product_id' => $detail->product_id,
            'jenis' => 'masuk',
            'qty' => $detail->qty,
            'keterangan_mutasi' => 'Pembelian ' . $pembelian->nomor_bukti,
            'tanggal_mutasi' => Carbon::now(),
        ]);
    }

    return redirect()->back()->with('success', 'Pembelian di-approve & stok diperbarui.');
}

}