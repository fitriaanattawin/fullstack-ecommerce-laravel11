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
        Schema::create('data_transaksis', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->text('alamat');
            $table->string('no_hp');
            $table->decimal('total', 15, 2);
            $table->string('status')->default('Pending');
            $table->text('keterangan_status')->nullable();
            $table->string('no_resi')->nullable();
            $table->timestamp('tanggal_transaksi')->useCurrent();
            $table->string('bukti_pembayaran')->nullable(); // path bukti
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('data_transaksis');
    }
};
