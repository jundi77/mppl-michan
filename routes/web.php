<?php

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

Route::get('/', function () {
    Auth::guard('pembeli')->logout();
    $user = Auth::guard('pembeli')->user();
    if( !($user)) {
        Auth::guard('pembeli')->attempt(['Email_Pembeli' => 'pembeli1@mail.com', 'password' => 'test123']);
        Auth::login(Auth::guard('pembeli')->user());
        // dump(Auth::guard('admin')->user());
    // dd(session()->all());
        echo "<script> alert('test'); </script>";
        return redirect('success');
    }
    // $user = new Administrator(); 
    dd($user);
    // return view('welcome');
});