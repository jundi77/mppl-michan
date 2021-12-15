<?php

namespace App\Http\Boundary;

class MenuUI extends Boundary
{
    public function pilihProduk()
    {
        // return r
    }

    public function pilihMenuUtama($pass)
    {
        return view('products', $pass);
    }

    public function tampilLogin()
    {
        return view('login');
    }

    public function masukLoginUI()
    {
    }
    
    public function pilihMenuPembeli($pass)
    {
        return view('user-profile', $pass);
    }

    public function pilihUser() {}

    public function pilihLogin() {}
    public function masukMenuUI() {}
    public function pilihMenuStore() {}
    public function pilihSearch() {}
}
