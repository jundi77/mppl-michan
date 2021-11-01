<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Keranjang extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $incrementing = false;
    protected $table = 'Keranjang';
    protected $primaryKey = [
        'ID_Pembeli',
        'ID_Barang',
    ];

    public function pemesanan()
    {
        return $this->belongsTo(Pemesanan::class, 'ID_Pemesanan', 'ID_Pemesanan');
    }

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'ID_Barang', 'ID_Barang');
    }

    // TODO relation pembeli
}
