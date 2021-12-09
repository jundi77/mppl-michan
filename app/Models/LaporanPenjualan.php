<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanPenjualan extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'Laporan_Penjualan';

    public function ambilDataLaporan() {}
    public function hapusDataLaporan() {}
    public function simpanDataLaporan() {}
}
