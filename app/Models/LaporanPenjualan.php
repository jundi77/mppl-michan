<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanPenjualan extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'Laporan_Penjualan';
    public static $class_id = 3702245;

    /**
     * Mengambil data laporan berdasarkan id laporan, pemesanan, atau admin
     * ! Argumen tidak boleh kosong
     * 
     * @param integer|null $id_laporan
     * @param integer|null $id_pemesanan
     * @param integer|null $id_admin
     * @return LaporanPenjualan|Collection|null
     */
    public function ambilDataLaporan(int|null $id_laporan, int|null $id_pemesanan, int|null $id_admin)
    {
        if ($id_laporan) {
            return LaporanPenjualan::where('ID_Laporan', $id_laporan)->first();
        } else if ($id_pemesanan) {
            return LaporanPenjualan::where('ID_Pemesanan', $id_pemesanan)->get();
        } else if ($id_admin) {
            return LaporanPenjualan::where('ID_Admin', $id_admin)->get();
        }

        throw new Exception("Argumen tidak boleh kosong", LaporanPenjualan::$class_id);
    }

    /**
     * Menghapus data laporan
     *
     * @return bool|null
     */
    public function hapusDataLaporan()
    {
        return $this->delete();
    }

    /**
     * Menyimpan data laporan
     *
     * @return bool
     */
    public function simpanDataLaporan()
    {
        return $this->save();
    }

}
