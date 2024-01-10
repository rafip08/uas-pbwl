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
        Schema::create('tb_toko', function (Blueprint $table) {
            $table->id();
            $table->string('kode_toko', 20);
            $table->string('nama', 100);
            $table->text('alamat');
            $table->string('nope', 13);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_toko');
    }
};
