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
        $table->string('metode_pembayaran')->after('no_hp');
    });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('data_transaksis', function (Blueprint $table) {
            //
        });
    }
};
