<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Order;
use App\Models\OrderItem;
use App\Models\Cart;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class OrderController extends Controller
{
    public function placeOrder(Request $request)
    {
        // Validasi input
        $request->validate([
            'payment_method' => 'required|string',
            'payment_proof' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        $userId = Auth::id();

        $cartItems = Cart::with('product')->where('user_id', $userId)->get();

        if ($cartItems->isEmpty()) {
            return redirect()->back()->with('error', 'Keranjang kosong.');
        }

        // Hitung subtotal, shipping dan total
        $subtotal = $cartItems->sum(fn($item) => $item->product->harga * $item->quantity);
        $shipping = 10000;
        $total = $subtotal + $shipping;

        // Upload bukti pembayaran
        $filePath = null;
        if ($request->hasFile('payment_proof')) {
            $file = $request->file('payment_proof');
            $filename = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('payment_proofs', $filename, 'public');
        }

        DB::beginTransaction();
        try {
            // Simpan data order
            $order = Order::create([
                'user_id' => $userId,
                'payment_method' => $request->payment_method,
                'subtotal' => $subtotal,
                'shipping' => $shipping,
                'total' => $total,
                'payment_proof' => $filePath,
            ]);

            // Simpan setiap item dari cart ke order_items
            foreach ($cartItems as $item) {
                OrderItem::create([
                    'order_id' => $order->id,
                    'product_id' => $item->product_id,
                    'quantity' => $item->quantity,
                    'price' => $item->product->harga,
                ]);
            }

            // Kosongkan keranjang
            Cart::where('user_id', $userId)->delete();

            DB::commit();

            return redirect()->route('home')->with('success', 'Order berhasil dibuat!');
        } catch (\Exception $e) {
            DB::rollBack();
            return back()->with('error', 'Gagal memproses order: ' . $e->getMessage());
        }
    }
}
