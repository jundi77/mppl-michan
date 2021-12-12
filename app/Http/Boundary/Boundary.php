<?php

namespace App\Http\Boundary;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseBoundary;
use Illuminate\Support\Facades\View;

class Boundary extends BaseBoundary
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    /**
     * Membuat halaman dengan komponen view dan data
     *
     * @param string $component
     * @param array $data
     * @return  \Illuminate\Contracts\View\View
     */
    protected function generatePage(string $component, array $data)
    {
        return View::make($component, $data);
    }
}
