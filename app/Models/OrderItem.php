<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class OrderItem extends Model
{
     use HasFactory;

    protected $fillable = [
        'order_id',
        'product_id',
        'quantity',
        'price',
    ];

    // Relasi: OrderItem milik 1 Order
    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    // Relasi: OrderItem mengacu pada 1 Product
    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
