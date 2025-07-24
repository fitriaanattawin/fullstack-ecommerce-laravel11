<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\DataTransaksi;
use App\Models\Detailransaksi;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Carbon\Carbon;


class TransaksiController extends Controller
{
   public function index() {
    $transaksis = DataTransaksi::with(['user', 'detailTransaksis.product'])
                  ->orderBy('id', 'desc')
                  ->get();

    return view('admin.datatransaksi', compact('transaksis'));
}


     public function show($id)
{
    $transaksi = DataTransaksi::with(['user', 'detailTransaksis.product'])->findOrFail($id);
    return view('admin.datatransaksi', compact('transaksi'));
}

   public function validasiTransaksi($id)
{
    $transaksi = DataTransaksi::with('detailTransaksis.product')->findOrFail($id);

    if ($transaksi->status !== 'Pending') {
        return back()->with('info', 'Transaksi sudah divalidasi atau diproses.');
    }

    try {
        DB::transaction(function () use ($transaksi) {
            foreach ($transaksi->detailTransaksis as $item) {
                $product = $item->product;

                if (!$product) {
                    continue;
                }

                if ($product->stok < $item->qty) {
                    throw new \Exception("Stok {$product->nama_produk} tidak mencukupi (tersisa {$product->stok}).");
                }

                // ─── Kurangi stok ───
                $product->stok -= $item->qty;
                $product->save();

                // ─── Catat ke mutasi sebagai barang keluar (K) ───
                \App\Models\Mutasi::create([
                    'product_id'        => $product->id,
                    'qty'               => $item->qty,
                    'jenis_mutasi'      => 'K',
                    'keterangan_mutasi' => 'Checkout user',
                    'tanggal_mutasi'    => now(),
                ]);
            }

            // BUAT NOMOR RESI OTOMATISS
            $noResi = strtoupper(Str::random(3)) . Carbon::now()->format('dmyHis');

            // Update status transaksi
            $transaksi->update([
                'status'             => 'Dikirim',
                'keterangan_status'  => 'Pesanan sedang dikirim',
                'no_resi'            => $noResi,
            ]);
        });

        return back()->with('success', 'Transaksi divalidasi, stok produk diperbarui, mutasi dicatat & No. Resi dibuat.');
    } catch (\Exception $e) {
        return back()->with('error', $e->getMessage());
    }
}
public function tolakTransaksi(Request $request, $id)
{
    $request->validate([
        'alasan_tolak' => 'required|string|max:500',
    ]);

    $transaksi = DataTransaksi::findOrFail($id);

    if ($transaksi->status !== 'Pending') {
        return back()->with('info', 'Transaksi sudah diproses sebelumnya.');
    }

    $transaksi->update([
        'status'             => 'Ditolak',
        'keterangan_status'  => 'Transaksi ditolak',
        'alasan_tolak'       => $request->alasan_tolak,
    ]);

    return back()->with('success', 'Transaksi ditolak & alasan disimpan.');
}


}
