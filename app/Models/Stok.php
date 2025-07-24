<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Stok extends Model
{
     protected $table = 'stok';
    protected $fillable = ['product_id','qty','tanggal','keterangan'];

    public function product()
    {
        return $this->belongsTo(Product::class);
    }
}
