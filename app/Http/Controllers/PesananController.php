<?php

namespace App\Http\Controllers;

use App\Http\Boundary\PesananUI;
use Illuminate\Http\Request;

class PesananController extends Controller
{
    public function __construct()
    {
        $this->PesananUI = resolve(PesananUI::class);
    }

    public function ambilFormPesan(Request $request) {}
    public function tampilFormPesan(Request $request) {}
    public function kirimDataPesan(Request $request) {}
    public function ambilDataPesan(Request $request) {}
}
