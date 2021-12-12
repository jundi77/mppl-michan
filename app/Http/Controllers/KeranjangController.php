<?php

namespace App\Http\Controllers;

use App\Http\Boundary\KeranjangUI;
use Illuminate\Http\Request;

class KeranjangController extends Controller
{
    public function __construct()
    {
        $this->KeranjangUI = resolve(KeranjangUI::class);
    }

    public function kirimListBarang(Request $request) {}
    public function ambilListBarang(Request $request) {}
    public function tampilListOrder(Request $request) {}
}
