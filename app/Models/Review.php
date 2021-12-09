<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;

    public $timestamps = false;
    protected $table = 'Review';

    public function barang()
    {
        return $this->belongsTo(Barang::class, 'ID_Barang', 'ID_Barang');
    }

    public function pembeli()
    {
        return $this->belongsTo(Pembeli::class, 'ID_Pembeli', 'ID_Pembeli');
    }

    public function simpanReview() {}
    public function hapusReview() {}
}
