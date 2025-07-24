<?php

namespace App\Http\Controllers;

use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use App\Models\Cart;
use App\Models\Product;
use App\Models\DataTransaksi;
use App\Models\Transaction;
use App\Models\TransactionItem;
use Illuminate\Http\Request;
use App\Models\DetailTransaksi;

class CheckoutController extends Controller
{
    public function index()
    {
        $user = Auth::user();
        return view('user.checkout', compact('user'));
    }

    public function showCheckout()
    {
        $user = Auth::user();
        $cartItems = Cart::with('product')->where('user_id', $user->id)->get();

        $subtotal = $cartItems->sum(function ($item) {
            return $item->product->harga * $item->quantity;
        });

        $shipping = 10000;
        $total = $subtotal + $shipping;

        return view('user.checkout', compact('cartItems', 'subtotal', 'shipping', 'total', 'user'));
    }
    public function prosesCheckout(Request $request)
        {
            $user = Auth::user();

            // Ambil cart + relasi produk lebih dulu untuk pengecekan stok
            $cartItems = Cart::with('product')->where('user_id', $user->id)->get();

            if ($cartItems->isEmpty()) {
                return back()->with('error', 'Keranjangmu masih kosong.');
            }

            //  CEK STOK SEBELUM VALIDASI LAIN
            foreach ($cartItems as $item) {
                // Pastikan produk masih ada & stok cukup
                if (!$item->product || $item->quantity > $item->product->stok) {
                    return back()->with('stock_error', [
                        'nama'     => $item->product->nama ?? 'Produk tidak ditemukan',
                        'diminta'  => $item->quantity,
                        'tersisa'  => $item->product->stok ?? 0,
                    ]);
                }
            }

            // VALIDASI INPUT FORM
            $request->validate([
                'alamat'            => 'required|string',
                'no_hp'             => 'required|string',
                'total'             => 'required|numeric',
                'metode_pembayaran' => 'required|in:Transfer Bank,COD',
                'bukti_pembayaran'  => $request->metode_pembayaran === 'Transfer Bank'
                                        ? 'required|image|mimes:jpeg,png,jpg|max:2048' //kondisi klo pilih Transfer Bank
                                        : 'nullable',                                  // kondisi klo pilih COD
            ]);

            // HANDLE BUKTI PEMBAYARAN
            $buktiPath = null;
            if ($request->hasFile('bukti_pembayaran')) {
                $buktiPath = $request->file('bukti_pembayaran')
                                    ->store('bukti', 'public');
            } elseif ($request->metode_pembayaran === 'COD') {
                $buktiPath = 'COD';  //supaya bisa disimpan di db sbg string
            }

            // SIMPAN TRANSAKSI 
            $transaksi = DataTransaksi::create([
                'user_id'           => $user->id,
                'alamat'            => $request->alamat,
                'no_hp'             => $request->no_hp,
                'total'             => $request->total,
                'status'            => 'Pending',
                'keterangan_status' => null,
                'no_resi'           => null,
                'tanggal_transaksi' => now(),
                'bukti_pembayaran'  => $buktiPath,
                'metode_pembayaran' => $request->metode_pembayaran,
            ]);

            // PINDAH DATA CART ➜ DETAIL_TRANSAKSI
            foreach ($cartItems as $item) {
                DetailTransaksi::create([
                    'transaksi_id' => $transaksi->id,
                    'product_id'   => $item->product->id,
                    'qty'          => $item->quantity,
                    'harga'        => $item->product->harga,
                    'subtotal'     => $item->quantity * $item->product->harga,
                ]);
            }

            // KOSONGKAN KERANJANG 
            Cart::where('user_id', $user->id)->delete();
            return redirect()
                ->route('checkout')
                ->with('success', 'Checkout berhasil! Silakan tunggu konfirmasi admin.');
        }

    public function updateCart(Request $request, $id)
    {
        $cart = Cart::where('id', $id)
                    ->where('user_id', Auth::id())
                    ->first();

        if (!$cart) {
            return back()->with('error', 'Item tidak ditemukan');
        }

        if ($request->action === 'increase') {
            $cart->quantity += 1;
        } elseif ($request->action === 'decrease' && $cart->quantity > 1) {
            $cart->quantity -= 1;
        }

        $cart->save();

        return back()->with('success', 'Cart updated!');
    }
}
