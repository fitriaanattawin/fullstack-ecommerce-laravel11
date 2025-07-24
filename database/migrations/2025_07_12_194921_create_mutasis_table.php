<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('mutasis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('product_id')->constrained(); // relasi ke tabel produk
            $table->integer('qty');
            $table->enum('jenis_mutasi', ['M', 'K']); // Masuk / Keluar
            $table->string('keterangan_mutasi'); // Restok, Checkout, dll
            $table->date('tanggal_mutasi');
            $table->text('keterangan')->nullable(); // optional
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('mutasis');
    }
};
