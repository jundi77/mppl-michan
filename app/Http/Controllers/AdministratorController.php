<?php

namespace App\Http\Controllers;

use App\Http\Boundary\AdministratorUI;
use App\Models\Barang;
use App\Models\Keranjang;
use App\Models\LaporanPenjualan;
use App\Models\Pemesanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class AdministratorController extends Controller
{
    public function __construct()
    {
        $this->AdministratorUI = resolve(AdministratorUI::class);
    }

    public function ambilDataAdmin(Request $request) {}
    public function ambilFormLogin(Request $request) {}

    public function getKelolaProduk(Request $request)
    {
        $barang = Barang::get();
        return view('admin.index', compact('barang'));
    }

    public function addKelolaProduk(Request $request)
    {
        // array:8 [▼
        //     "_token" => "lHZYit9tNXN9C4iy7YQIl81n0dnXDZwdL4tzYRoF"
        //     "productCode" => "fsdf"
        //     "productName" => "fs"
        //     "productPrice" => "23"
        //     "productDescription" => "sfsdf"
        //     "color" => "fsdfdf"
        //     "size" => "adas"
        //     "in-stock" => "on"
        //     ]
        // dd($request->all());

        $barang = new Barang();
        $barang->ID_Barang = $request->productCode;
        $barang->Nama_Barang = $request->productName;
        $barang->Harga_Barang = $request->productPrice;
        $barang->Detail_Barang = $request->productDescription;
        $barang->Warna_Barang = $request->color;
        $barang->Ukuran_Barang = $request->size;
        $barang->Inventory = $request->amount;
        $barang->status = $request['in-stock']? 'in-stock' : 'out-stock';
        $barang->save();

        return redirect('/admin/kelola-produk');
    }

    public function delKelolaProduk(Request $request)
    {
        // array:8 [▼
        //     "_token" => "lHZYit9tNXN9C4iy7YQIl81n0dnXDZwdL4tzYRoF"
        //     "productCode" => "fsdf"
        //     "productName" => "fs"
        //     "productPrice" => "23"
        //     "productDescription" => "sfsdf"
        //     "color" => "fsdfdf"
        //     "size" => "adas"
        //     "in-stock" => "on"
        //     ]
        // dd($request->all());

        DB::table('Barang')->where('ID_Barang', $request->id)->delete();

        return redirect('/admin/kelola-produk');
    }

    public function getKelolaStatus(Request $request)
    {
        $pesanan = Pemesanan::get();
        return view('admin.status', compact('pesanan'));
    }

    public function getLaporanPenjualan(Request $request)
    {
        $laporan = LaporanPenjualan::get();

        return view('admin.report', compact('laporan'));
    }
}
