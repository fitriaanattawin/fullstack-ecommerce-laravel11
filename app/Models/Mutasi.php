<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mutasi extends Model
{
    protected $fillable = [
    'product_id',
    'qty',
    'jenis_mutasi',
    'keterangan_mutasi',
    'tanggal_mutasi',
    'keterangan'
];
public function product()
{
    return $this->belongsTo(Product::class);
}

}
