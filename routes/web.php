<?php

use App\Http\Controllers\AdministratorController;
use App\Http\Controllers\Controller;
use App\Http\Controllers\KeranjangController;
use App\Http\Controllers\MenuController;
use App\Models\Administrator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     Auth::guard('pembeli')->logout();
//     $user = Auth::guard('pembeli')->user();
//     if( !($user)) {
//         Auth::guard('pembeli')->attempt(['Email_Pembeli' => 'pembeli1@mail.com', 'password' => 'test123']);
//         Auth::login(Auth::guard('pembeli')->user());
//         // dump(Auth::guard('admin')->user());
//     // dd(session()->all());
//         echo "<script> alert('test'); </script>";
//         return redirect('success');
//     }
//     // $user = new Administrator(); 
//     dd($user);
//     // return view});


Route::get('/', [Controller::class, 'index']);

Route::prefix('login')->group(function() {
    Route::get('/', [MenuController::class, 'tampilLogin'])->name('login');
    Route::post('/', [MenuController::class, 'postLogin'])->name('login.post');
});

Route::prefix('signup')->group(function() {
    Route::get('/', [MenuController::class, 'tampilDaftar'])->name('signup');
    Route::post('/', [MenuController::class, 'postDaftar'])->name('signup.post');
});

Route::prefix('logout')->group(function() {
    Route::get('/', [MenuController::class, 'getLogout'])->name('logout');
});

Route::prefix('products')->group(function() {
    Route::get('/', [MenuController::class, 'tampilMenuBarang']);
    Route::get('detail/{id}', [MenuController::class, 'tampilDetailBarang']); // TODO
});


Route::middleware('auth:pembeli')->group(function() {
    Route::prefix('carts')->group(function() {
        Route::get('/', [KeranjangController::class, 'tampilListOrder']);
        Route::post('/', [KeranjangController::class, 'addCart']);
        Route::delete('/', [KeranjangController::class, 'delCart']);
        Route::post('order', [KeranjangController::class, 'postPesanan']);
        Route::get('order-success', [KeranjangController::class, 'pesananSukses']);
    });
    Route::prefix('user')->group(function() {
        Route::get('profile', [MenuController::class, 'pilihDataPembeli']);
        Route::get('transaction', [MenuController::class, 'getRiwayatPesan']); // TODO
    });
});

Route::middleware('auth:admin')->group(function() {
    Route::prefix('admin')->group(function() {
        Route::get('kelola-produk', [AdministratorController::class, 'getKelolaProduk']);
        Route::post('kelola-produk', [AdministratorController::class, 'addKelolaProduk']);
        Route::delete('kelola-produk', [AdministratorController::class, 'delKelolaProduk']);
    
        Route::get('kelola-status', [AdministratorController::class, 'getKelolaStatus']);
        Route::get('laporan-penjualan', [AdministratorController::class, 'getLaporanPenjualan']);
    });
});
