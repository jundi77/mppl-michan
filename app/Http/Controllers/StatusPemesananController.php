<?php

namespace App\Http\Controllers;

use App\Http\Boundary\StatusPemesananUI;
use Illuminate\Http\Request;

class StatusPemesananController extends Controller
{
    public function __construct()
    {
        $this->StatusPemesananUI = resolve(StatusPemesananUI::class);
    }

    public function ambilStatus(Request $request) {}
}
