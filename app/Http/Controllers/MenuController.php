<?php

namespace App\Http\Controllers;

use App\Http\Boundary\MenuUI;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->MenuUI = resolve(MenuUI::class);
    }

    public function pilihDataPembeli(Request $request) {}
    public function ambilMenuUtama(Request $request) {}
    public function pilihDataBarang(Request $request) {}
    public function pilihMenuDaftarAkun(Request $request) {}
    public function mintaBarangUI(Request $request) {}
    public function tampilMenuBarang(Request $request) {}
    public function ambilLogin(Request $request) {}
    public function mintaOrderUI(Request $request) {}
    public function mintaPendaftaranUI(Request $request) {}
}
