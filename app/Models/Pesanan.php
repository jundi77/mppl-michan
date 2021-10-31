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
}
