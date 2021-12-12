<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pembeli extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'Pembeli';

    /** Laravel relationship models  */
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
    /** Laravel relationship models  */


    /**
     * Mengambil data akun berdasarkan ID Pembeli
     *
     * @var int $id ID Pembeli
     * @return Pembeli
     */
    public function ambilDataAkun(int $id)
    {
        return Pembeli::where(['ID_Pembeli' => $id])->first();
    }

    /**
     * Menyimpan data akun
     *
     * @return bool Status perubahan
     */
    public function simpanDataAkun()
    {
        return $this->save();
    }

}
