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
        Schema::table('mutasis', function (Blueprint $table) {
            $table->string('payment_method')->nullable();
            $table->string('payment_proof')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('mutasis', function (Blueprint $table) {
            $table->dropColumn('payment_method');
            $table->dropColumn('payment_proof');
        });
    }
};
