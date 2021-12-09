<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Barang extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'Barang';

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

    public function cekBarang() {}
    public function dataBarang() {}
    public function stokKurang() {}
    public function ambilDeskripsiBarang() {}
}
