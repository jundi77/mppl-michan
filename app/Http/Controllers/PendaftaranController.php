<?php

namespace App\Http\Controllers;

use App\Http\Boundary\PendaftaranUI;
use Illuminate\Http\Request;

class PendaftaranController extends Controller
{
    public function __construct()
    {
        $this->PendaftaranUI = resolve(PendaftaranUI::class);
    }

    public function ambilFormDaftar(Request $request)
    {

    }

    public function tambahAkun(Request $request)
    {

    }

    public function validasiForm(Request $request)
    {

    }

    public function simpanFormEdit(Request $request)
    {

    }

    public function ambilFormEdit(Request $request)
    {

    }

    public function setError(Request $request)
    {

    }

}
