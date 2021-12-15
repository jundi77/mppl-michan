<?php

namespace App\Http\Boundary;

class KeranjangUI extends Boundary
{
    public function masukKeranjangUI() {}
    public function tampilKeranjang()
    {
        return view('cart');
    }

    public function pilihCheckout() {}
}
