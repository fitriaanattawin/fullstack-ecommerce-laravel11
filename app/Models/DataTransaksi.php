<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Model;


class DataTransaksi extends Model
{
     use HasFactory;

    protected $fillable = [
        'user_id', 'alamat', 'no_hp', 'total', 'status',
        'keterangan_status', 'no_resi', 'tanggal_transaksi', 'bukti_pembayaran', 'metode_pembayaran', 'alasan_tolak',
    ];

    public function user(): BelongsTo
{
    return $this->belongsTo(\App\Models\User::class, 'user_id');
}

    public function detailTransaksis()
{
    return $this->hasMany(DetailTransaksi::class, 'transaksi_id');
}


}
