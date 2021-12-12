<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Collection;
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

    /**
     * Get keranjang dengan ID Pemesanan.
     *
     * @param integer $id_pemesanan
     * @return Collection
     */
    public function listBarangOrder(int $id_pemesanan)
    {
        return Keranjang::where('ID_Pemesanan', $id_pemesanan)->get();
    }


    /**
     * Menyimpan list barang yang ada update
     *
     * @param Collection|array $list_barang_order
     * @return bool Status apakah semua item berhasil diupdate
     */
    public function simpanBarangOrder(Collection|array $list_barang_order)
    {
        $success = true;
        foreach ($list_barang_order as $key => $keranjang) {
            $success |= $keranjang->save();
        }

        /**
         * Jika ada salah satu item yang tidak tersave,
         * akan return false
         */
        return $success;
    }

}
