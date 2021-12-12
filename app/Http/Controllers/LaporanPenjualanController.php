<?php

namespace App\Http\Controllers;

use App\Http\Boundary\LaporanPenjualanUI;
use Illuminate\Http\Request;

class LaporanPenjualanController extends Controller
{
    public function __construct()
    {
        $this->LaporanPenjualanUI = resolve(LaporanPenjualanUI::class);
    }

    public function ambilDataLaporan(Request $request) {}
}
