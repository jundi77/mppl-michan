<?php

namespace App\Http\Controllers;

use App\Http\Boundary\KeranjangUI;
use App\Models\Barang;
use App\Models\Keranjang;
use App\Models\Pemesanan;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class KeranjangController extends Controller
{
    public function __construct()
    {
        $this->KeranjangUI = resolve(KeranjangUI::class);
    }

    public function kirimListBarang(Request $request) {}
    public function ambilListBarang(Request $request) {}

    public function tampilListOrder(Request $request)
    {
        $carts = Keranjang::where('ID_Pemesanan', null)->get();
        $user = Auth::guard('pembeli')->user();

        return view('cart', compact('carts', 'user'));
    }

    public function addCart(Request $request)
    {
        $barang = Barang::where('ID_Barang', $request->id)->first();
        $user = Auth::guard('pembeli')->user();
        if (!$barang) {
            return redirect('/');
        }

        $keranjang = new Keranjang();
        $keranjang->ID_Barang = $barang->ID_Barang;
        $keranjang->ID_Pembeli = $user->ID_Pembeli;
        $keranjang->Nama_Barang = $barang->Nama_Barang;
        $keranjang->Jumlah = $request->quantity;
        $keranjang->Ukuran = $barang->Ukuran_Barang;
        $keranjang->Warna = $barang->Warna_Barang;
        $keranjang->Harga_Barang = $barang->Harga_Barang;
        $keranjang->save();

        return redirect('carts');
    }

    public function delCart(Request $request)
    {
        $user = Auth::guard('pembeli')->user();
        DB::table('Keranjang')->where('ID_Barang', $request->id)
                              ->where('ID_Pembeli', $user->ID_Pembeli)
                              ->where('ID_Pemesanan', null)
                              ->delete();

        return redirect('carts');
    }

    public function postPesanan(Request $request)
    {
        $user = Auth::guard('pembeli')->user();
        $carts = Keranjang::where('ID_Pemesanan', null)
                        ->where('ID_Pembeli', $user->ID_Pembeli)
                        ->get();

        $pemesanan = new Pemesanan();
        $pemesanan->ID_Pembeli = $user->ID_Pembeli;
        $pemesanan->Alamat_Kirim = $user->Alamat_Pembeli;
        $pemesanan->Waktu = new DateTime();

        $prc = 0;
        $qty = 0;
        foreach ($carts as $c) {
            $qty += $c->Jumlah;
            $prc += $c->Harga_Barang + $c->Jumlah;
        }

        $pemesanan->Jumlah_Barang = $qty;
        $pemesanan->Total_Harga = $prc;
        $pemesanan->save();

        $carts = Keranjang::where('ID_Pemesanan', null)
                        ->where('ID_Pembeli', $user->ID_Pembeli)
                        ->get();
        foreach ($carts as $c) {
            $c->ID_Pemesanan = $pemesanan->ID_Pemesanan;
            $c->save();
        }

        return redirect('/carts/order-success');
    }

    public function pesananSukses(Request $request)
    {
        return view('order-success');
    }
}
