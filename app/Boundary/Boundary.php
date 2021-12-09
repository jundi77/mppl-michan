<?php

namespace App\Http\Boundary;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseBoundary;

class Boundary extends BaseBoundary
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
}
