<?php

namespace App\Http\Controllers;

use App\Http\Boundary\PembayaranUI;
use Illuminate\Http\Request;

class PembayaranController extends Controller
{
    public function __construct()
    {
        $this->PembayaranUI = resolve(PembayaranUI::class);
    }

    public function masukDataPembayaran(Request $request) {}
    public function tampilMenuPembayaran(Request $request) {}
}
