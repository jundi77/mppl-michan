<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'Pembeli';

    public function review()
    {
        return $this->hasMany(Review::class, 'ID_Pembeli', 'ID_Pembeli');
    }

    public function keranjang()
    {
        return $this->hasMany(Keranjang::class, 'ID_Pembeli', 'ID_Pembeli');
    }

    public function barangThroughKeranjang()
    {
        return $this->hasManyThrough(Barang::class, Keranjang::class, 'ID_Pembeli', 'ID_Barang', 'ID_Pembeli', 'ID_Barang');
    }

    public function barangThroughReview()
    {
        return $this->hasManyThrough(Barang::class, Review::class, 'ID_Pembeli', 'ID_Barang', 'ID_Pembeli', 'ID_Barang');
    }

    public function ambilDataAkun() {}
    public function simpanDataAkun() {}
}
