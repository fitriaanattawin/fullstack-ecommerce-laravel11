<?php

namespace App\Http\Controllers;
use App\Models\DataTransaksi;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function index()
    {
        // semua transaksi milik user yang sedang login
        $transaksis = Auth::user()   // mengambil user yang sedang login      
            ->transaksis()           // relasi hasMany dari user ke DataTransaksi
            ->latest()
            ->get();                 //  eksekusi query dan ambil datanya jadi collaction

       return view('user.dashboard', compact('transaksis'));

    }
}
