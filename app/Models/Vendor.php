<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vendor extends Model
{
    protected $fillable = ['nama', 'alamat', 'no_hp', 'email'];

    public function pembelians()
    {
        return $this->hasMany(Pembelian::class);
    }

    public function products()
    {
        return $this->hasMany(Product::class);
    }
}
