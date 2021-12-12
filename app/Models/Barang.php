<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'Barang';

    /** Laravel relationship models  */
    public function review()
    {
        return $this->hasMany(Review::class, 'ID_Barang', 'ID_Barang');
    }

    public function keranjang()
    {
        return $this->hasMany(Keranjang::class, 'ID_Barang', 'ID_Barang');
    }

    public function pembeliThroughReview()
    {
        return $this->hasManyThrough(Pembeli::class, Review::class, 'ID_Barang', 'ID_Pembeli', 'ID_Barang', 'ID_Pembeli');
    }

    public function pembeliThroughKeranjang()
    {
        return $this->hasManyThrough(Pembeli::class, Keranjang::class, 'ID_Barang', 'ID_Pembeli', 'ID_Barang', 'ID_Pembeli');
    }
    /** Laravel relationship models  */

    /**
     * Cek apakah barang masih ada.
     *
     * @return bool
     */
    public function cekBarang()
    {
        return (0 >= $this->Inventory);
    }

    /**
     * Mengembalikan data barang dalam bentuk array.
     *
     * @return array
     */
    public function dataBarang()
    {
        return $this->toArray();
    }

    /**
     * Cek jika stok kurang dari yang tersimpan.
     *
     * @param integer $amount
     * @return bool
     */
    public function stokKurang(int $amount)
    {
        return ($this->Inventory < $amount);
    }

    /**
     * Mengembalikan deskripsi barang dari record.
     *
     * @return string Detail barang
     */
    public function ambilDeskripsiBarang()
    {
        return $this->Detail_Barang;
    }
}
