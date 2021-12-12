<?php

namespace App\Http\Controllers;

use App\Http\Boundary\AdministratorUI;
use Illuminate\Http\Request;

class AdministratorController extends Controller
{
    public function __construct()
    {
        $this->AdministratorUI = resolve(AdministratorUI::class);
    }

    public function ambilDataAdmin(Request $request) {}
    public function ambilFormLogin(Request $request) {}
}
