<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'Pemesanan';

    public function keranjang()
    {
        return $this->hasMany(Keranjang::class, 'ID_Pemesanan', 'ID_Pemesanan');
    }

    public function ambilDataPesanan() {}
    public function ambilDataPengiriman() {}
    public function simpanDataPemesanan() {}
    public function hapusDataPemesanan() {}
}
