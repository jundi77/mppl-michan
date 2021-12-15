<?php

namespace App\Http\Boundary;

class PembeliUI extends Boundary
{
    /**
     * Halaman utama
     *
     * @param \Illuminate\Contracts\Auth\Authenticatable|null $data_pembeli
     * @return void
     */
    public function tampilPembeli(\Illuminate\Contracts\Auth\Authenticatable|null $data_pembeli)
    {
        return view('user-profile');
    }
}
