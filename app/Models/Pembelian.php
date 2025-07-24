<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pembelian extends Model
{
    protected $fillable = [
    'nomor_bukti',
    'tanggal_pembelian',
    'vendor_id',
    'created_by',
    'keterangan',
    'total'
];
    public function vendor()
{
    return $this->belongsTo(Vendor::class);
}

public function details()
{
    return $this->hasMany(PembelianDetail::class, 'pembelian_id', 'id');
}


public function user()
{
    return $this->belongsTo(User::class, 'created_by');
}

}
