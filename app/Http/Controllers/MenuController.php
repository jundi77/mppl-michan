<?php

namespace App\Http\Controllers;

use App\Http\Boundary\MenuUI;
use App\Models\Administrator;
use App\Models\Barang;
use App\Models\Keranjang;
use App\Models\Pembeli;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class MenuController extends Controller
{
    public function __construct()
    {
        $this->MenuUI = resolve(MenuUI::class);
    }

    public function pilihDataBarang(Request $request)
    {
    }
    
    public function tampilMenuBarang(Request $request)
    {
        $barang = Barang::get();
        return $this->MenuUI->pilihMenuUtama(compact('barang'));
    }

    public function tampilDetailBarang(Request $request)
    {
        $barang = Barang::where('ID_Barang', $request->id)->first();;
        return view('product-detail', compact('barang'));
    }

    public function tampilLogin(Request $request)
    {
        if (Auth::guard('admin')->user()) {
            return redirect('/admin/kelola-produk');
        } else if (Auth::guard('pembeli')->user()) {
            return redirect('/user/profile');
        }

        return $this->MenuUI->tampilLogin();
    }

    public function getLogout(Request $request)
    {
        Auth::guard('admin')->logout();
        Auth::guard('pembeli')->logout();

        return redirect('login');
    }

    public function postLogin(Request $request)
    {
        if (Auth::guard('admin')->attempt(['Email_Admin' => $request->email, 'password' => $request->password])) {
            // Auth::guard('admin')->login(Administrator::where('Email_Admin', $request->email)->first());
            return redirect('/admin/kelola-produk');
        } else if (Auth::guard('pembeli')->attempt(['Email_Pembeli' => $request->email, 'password' => $request->password])) {
            // Auth::guard('pembeli')->login(Pembeli::where('Email_Pembeli', $request->email)->first());
            return redirect('/user/profile');
        }

        return $this->MenuUI->tampilLogin();
    }

    public function tampilDaftar(Request $request)
    {
        if (Auth::guard('admin')->user()) {
            return redirect('/admin/kelola-produk');
        } else if (Auth::guard('pembeli')->user()) {
            return redirect('/user/profile');
        }

        return view('signup');
    }

    public function postDaftar(Request $request)
    {
        $pembeli = new Pembeli();
        $pembeli->Email_Pembeli = $request->email;
        $pembeli->Alamat_Pembeli = $request->alamat;
        $pembeli->Password_Pembeli = Hash::make($request->password);
        $pembeli->PostCode = $request->kodepos;
        $pembeli->Nama_Pembeli = $request->namalengkap;
        $pembeli->NoHP_Pembeli = $request->nohp;
        $pembeli->save();

        Auth::guard('pembeli')->login($pembeli);
        return redirect('/user/profile');
    }

    public function pilihDataPembeli(Request $request)
    {
        $user = Auth::guard('pembeli')->user();
        return $this->MenuUI->pilihMenuPembeli(compact('user'));
    }

    public function getRiwayatPesan(Request $request)
    {
        $user = Auth::guard('pembeli')->user();
        $pesanan = Keranjang::where('ID_Pemesanan', '!=', null)
                        ->where('ID_Pembeli', $user->ID_Pembeli)
                        ->get();

        return view('user-transaction', compact('user', 'pesanan'));
    }

    public function ambilMenuUtama(Request $request) {}
    public function pilihMenuDaftarAkun(Request $request) {}
    public function mintaBarangUI(Request $request) {}
    public function ambilLogin(Request $request) {}
    public function mintaOrderUI(Request $request) {}
    public function mintaPendaftaranUI(Request $request) {}
}
