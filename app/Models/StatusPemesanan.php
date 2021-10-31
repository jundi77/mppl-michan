<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class StatusPemesanan extends Model
{
    use HasFactory;

    public $timestamps = false;
    public $incrementing = false;
    protected $table = 'Status_Pemesanan';
    protected $primaryKey = [
        'ID_Pemesanan',
        'ID_Pembeli',
        'NoResi',
    ];
}
