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
     * @param mixed $timestamp_awal
     * @param mixed $timestamp_akhir
     * @return LaporanPenjualan|Collection|null
     */
    public function ambilDataLaporan(int|null $id_laporan=null, int|null $id_pemesanan=null, int|null $id_admin=null, $timestamp_awal=null, $timestamp_akhir=null)
    {
        $query = null;
        $singular = false;

        if ($id_laporan) {
            $query =  LaporanPenjualan::where('ID_Laporan', $id_laporan);
            $singular = true;
        } else if ($id_pemesanan) {
            $query =  LaporanPenjualan::where('ID_Pemesanan', $id_pemesanan);
        } else if ($id_admin) {
            $query =  LaporanPenjualan::where('ID_Admin', $id_admin);
        }

        if ($query) {
            if ($timestamp_awal) {
                $query->where('Waktu', '>=', $timestamp_awal);
            }

            if ($timestamp_akhir) {
                $query->where('Waktu', '<=', $timestamp_akhir);
            }

            return $singular? $query->first() : $query->get();
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
