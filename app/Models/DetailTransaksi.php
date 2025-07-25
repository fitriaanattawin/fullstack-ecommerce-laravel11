<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DetailTransaksi extends Model
{
    use HasFactory;

    protected $fillable = ['transaksi_id', 'product_id', 'qty', 'harga', 'subtotal'];

    public function transaksi()
{
    return $this->belongsTo(DataTransaksi::class, 'transaksi_id');
}

   public function product()
{
    return $this->belongsTo(Product::class, 'product_id');
}
}
