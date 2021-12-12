<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pemesanan extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'Pemesanan';
    public static $class_id = 871943;

    public function keranjang()
    {
        return $this->hasMany(Keranjang::class, 'ID_Pemesanan', 'ID_Pemesanan');
    }

    public function pembayaran()
    {
        return $this->hasOne(Pembayaran::class, 'ID_Pemesanan', 'ID_Pemesanan');
    }

    public function statusPemesanan()
    {
        return $this->hasOne(StatusPemesanan::class, 'ID_Pemesanan', 'ID_Pemesanan');
    }

    /**
     * Ambil data pesanan berdasarkan id pesanan atau id pembeli.
     * !Argumen tidak boleh kosong
     *
     * @param integer|null $id_pesanan
     * @param integer|null $id_pembeli
     * @return Pemesanan|Collection
     */
    public function ambilDataPesanan(int|null $id_pesanan, int|null $id_pembeli)
    {
        if ($id_pesanan) {
            return Pemesanan::where('ID_Pemesanan' ,$id_pesanan)->first();
        } else if ($id_pembeli) {
            return Pemesanan::where('ID_Pembeli', $id_pembeli)->get();
        }

        throw new Exception("Argumen tidak boleh kosong", Pemesanan::$class_id);
    }

    /**
     * Mengambil data pengiriman digabung dengan status dan nomor resi
     *
     * @return array
     */
    public function ambilDataPengiriman()
    {
        $status_pemesanan = $this->statusPemesanan;
        $pembayaran = $this->pembayaran;

        return [
            'PNama' => $this->PNama,
            'PAlamat' => $this->PAlamat,
            'PKodePost' => $this->PKodePost,
            'PKota' => $this->PKota,
            'PNomorHP' => $this->PNomorHP,
            'PMetode' => $this->PMetode,
            'Ongkos' => $this->Ongkos,
            'NoResi' => $pembayaran? $pembayaran->NoResi : 'Belum ada nomor resi',
            'Status' => $status_pemesanan? $status_pemesanan->Status : 'Belum ada status',
        ];
    }

    /**
     * Menyimpan perubahan pemesanan
     *
     * @return bool
     */
    public function simpanDataPemesanan()
    {
        $this->save();
    }

    /**
     * Menghapus data pemesanan
     *
     * @return bool|null
     */
    public function hapusDataPemesanan()
    {
        $this->delete();
    }

}
