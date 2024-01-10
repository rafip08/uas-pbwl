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
        Schema::create('tb_pengiriman', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_penerima');
            $table->unsignedBigInteger('id_jenis');
            $table->decimal('jumlah_barang', 50);
            $table->date('tgl_penyaluran');
            $table->foreign('id_penerima')->references('id')->on('tb_toko');
            $table->foreign('id_jenis')->references('id')->on('tb_barang');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('tb_pengiriman');
    }
};
