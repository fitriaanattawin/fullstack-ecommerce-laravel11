<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PembelianDetail extends Model
{
    protected $fillable = [
        'pembelian_id',
        'product_id',
        'qty',
        'harga_satuan',
        'subtotal'
    ];
    public function pembelian()
{
    return $this->belongsTo(Pembelian::class);
}

public function product()
{
    return $this->belongsTo(Product::class);
}

}
