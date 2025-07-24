<?php

namespace App\Models;
use App\Models\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TransactionItem extends Model
{
     use HasFactory;

    protected $fillable = [
        'transaction_id',
        'product_id',
        'qty',
        'harga_satuan',
    ];
    public function product()
{
    return $this->belongsTo(Product::class);
}

public function transaction()
{
    return $this->belongsTo(Transaction::class);
}

}
