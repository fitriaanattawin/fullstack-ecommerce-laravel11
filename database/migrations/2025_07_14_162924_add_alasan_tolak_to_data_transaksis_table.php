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
        Schema::table('data_transaksis', function (Blueprint $table) {
              $table->text('alasan_tolak')->nullable()->after('keterangan_status');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('data_transaksis', function (Blueprint $table) {
              $table->dropColumn('alasan_tolak');
        });
    }
};
