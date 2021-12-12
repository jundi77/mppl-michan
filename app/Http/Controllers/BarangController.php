<?php

namespace App\Http\Controllers;

use App\Http\Boundary\BarangUI;
use Illuminate\Http\Request;

class BarangController extends Controller
{
    public function __construct()
    {
        $this->BarangUI = resolve(BarangUI::class);
    }

    public function ambilDataBarang(Request $request){}
    public function tampilDataBarang(Request $request){}
}
