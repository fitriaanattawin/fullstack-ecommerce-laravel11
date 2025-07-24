<?php
namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\Cart;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function showCart()
    {
        $userId = Auth::id();
       $cartItems = Cart::with('product')->where('user_id', Auth::id())->get();

        $subtotal = $cartItems->sum(fn($item) => $item->price * $item->quantity);
        $shipping = 10000;
        $total = $subtotal + $shipping;

        return view('user.cart', compact('cartItems', 'subtotal', 'shipping', 'total'));
    }

   public function addToCart(Request $request)
{
    $userId = Auth::id();
    $request->validate([
    'product_id' => 'required|exists:products,id',
    'quantity'   => 'required|integer|min:1',
]);

    $productId = $request->product_id;
    $quantity = $request->quantity ?? 1;

   $product = Product::find($productId);

if (!$product) {
    return back()->with('error', 'Produk tidak ditemukan.');
}

$cartItem = Cart::where('user_id', $userId)->where('product_id', $productId)->first();

if ($cartItem) {
    $cartItem->quantity += $quantity;
    $cartItem->save();
} else {
    Cart::create([
        'user_id' => $userId,
        'product_id' => $productId,
        'price' => $product->harga,
        'quantity' => $quantity,
    ]);
}

    return redirect()->route('user.cart')->with('success', 'Produk ditambahkan ke keranjang.');
}



    public function removeFromCart($id)
    {
        $userId = Auth::id();
        Cart::where('id', $id)->where('user_id', $userId)->delete();

        return redirect()->route('user.cart')->with('success', 'Produk berhasil dihapus dari cart!');
    }

}
