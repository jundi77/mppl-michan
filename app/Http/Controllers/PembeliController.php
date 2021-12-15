<?php

namespace App\Http\Controllers;

use App\Http\Boundary\PembeliUI;
use App\Models\Pembeli;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PembeliController extends Controller
{
    public function __construct()
    {
        $this->PembeliUI = resolve(PembeliUI::class);
    }

    /**
     * Ambil data pembeli dari info login
     *
     * @return \Illuminate\Contracts\Auth\Authenticatable|null
     */
    public function ambilDataPembeli()
    {
        return Auth::guard('pembeli')->user();
    }

    /**
     * Passing data pembeli ke page generator
     *
     * @param Request $request
     * @return mixed
     */
    public function tampilDataPembeli(Request $request)
    {
        $data_pembeli = $this->ambilDataPembeli();

        return $this->pembeliUI->tampilPembeli($data_pembeli);
    }

}
