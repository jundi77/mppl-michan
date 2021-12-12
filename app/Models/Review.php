<?php

namespace App\Models;

use Exception;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'Review';
    public static $class_id = 88002685;

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'ID_Barang', 'ID_Barang');
    }

    public function pembeli()
    {
        return $this->belongsTo(Pembeli::class, 'ID_Pembeli', 'ID_Pembeli');
    }

    /**
     * Menghapus data review
     *
     * @return bool|null
     */
    public function hapusReview()
    {
        return $this->delete();
    }

    /**
     * Menyimpan data review
     *
     * @return bool
     */
    public function simpanReview()
    {
        return $this->save();
    }

    /**
     * Ambil data review berdasarkan id review  atau id barang.
     * !Argumen tidak boleh kosong
     *
     * @param integer|null $id_review
     * @param integer|null $id_barang
     * @return Review|Collection
     */
    public function ambilDataPemesanan(int|null $id_review, int|null $id_barang=null)
    {
        if ($id_review) {
            return Review::where('ID_Review' ,$id_review)->first();
        } else if ($id_barang) {
            return Review::where('ID_Barang', $id_barang)->get();
        }

        throw new Exception("Argumen tidak boleh kosong", Review::$class_id);
    }
}
