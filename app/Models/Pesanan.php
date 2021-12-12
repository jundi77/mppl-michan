<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Pesanan extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $incrementing = false;
    protected $table = 'Pesanan';
    protected $primaryKey = [
        'ID_Pemesanan',
        'ID_Pembeli',
    ];

    /**
     * Menyimpan data pesanan
     *
     * @return bool
     */
    public function simpanDataPesan()
    {
        return $this->save();
    }

    /**
     * Mencari pesanan berdasarkan ID
     *
     * @param integer $id_pesanan
     * @return Pesanan
     */
    public function ambilDataPesan(int $id_pesanan)
    {
        return Pesanan::where(['ID_Pemesanan' => $id_pesanan])->first();
    }

}
