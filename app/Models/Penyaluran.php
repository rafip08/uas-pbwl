<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Model;

class Penyaluran extends Model
{
    use HasFactory;

    protected $table = 'tb_pengiriman'; 

    protected $fillable = [
        'id_penerima', 'id_jenis', 'jumlah_barang', 'tgl_penyaluran'
    ];

    public function penerima(): HasOne
    {
        return $this->hasOne(Penerima::class, 'id', 'id_penerima');
    }

    public function jenis(): HasOne
    {
        return $this->hasOne(Jenis::class, 'id', 'id_jenis');
    }

}
