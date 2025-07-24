<?php

namespace App\Http\Controllers;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PembayaranController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'transaction_id' => 'required|exists:transactions,id',
            'payment_method' => 'required|string',
            'payment_proof' => 'required|image|mimes:jpeg,png,jpg,pdf|max:2048',
        ]);

        $user = Auth::user();

        // Simpan file bukti
        $path = $request->file('payment_proof')->store('bukti_pembayaran', 'public');

        // Simpan ke tabel pembayarans
        Transaction::create([
            'user_id' => $user->id,
            'transaction_id' => $request->transaction_id,
            'payment_method' => $request->payment_method,
            'payment_proof' => $path,
            'status' => 'Menunggu',
        ]);

        return redirect()->route('transaksi.saya')->with('success', 'Bukti pembayaran berhasil dikirim, tunggu validasi admin.');
    }
}
