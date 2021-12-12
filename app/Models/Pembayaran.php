<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembayaran extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'Pembayaran';

    /**
     * Mengembalikan data pemesanan terkait.
     *
     * @return Pemesanan
     */
    public function ambilDataPesan()
    {
        $this->belongsTo(Pemesanan::class, 'ID_Pemesanan', 'ID_Pemesanan');
    }

    /**
     * Mengambil data pembayaran berdasarkan nomor resi
     *
     * @param string $noresi Nomor resi pembayaran
     * @return Pembayaran
     */
    public function ambilDataPembayaran(string $noresi)
    {
        return Pembayaran::where(['NoResi' => $noresi])->first();
    }

    /**
     * Simpan data pembayaran ke DB.
     *
     * @return bool
     */
    public function simpanDataPembayaran()
    {
        return $this->save();
    }

    /**
     * Hapus data pembayaran dari DB
     *
     * @return bool|null
     */
    public function hapusDataPembayaran()
    {
        return $this->delete();
    }

}
