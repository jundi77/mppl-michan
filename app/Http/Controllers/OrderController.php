<?php

namespace App\Http\Controllers;

use App\Http\Boundary\OrderUI;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function __construct()
    {
        $this->OrderUI = resolve(OrderUI::class);
    }

    public function ambilPemesanan(Request $request) {}
    public function ambilPembayaran(Request $request) {}
    public function simpanPembayaran(Request $request) {}
    public function hapusPemesanan(Request $request) {}
}
