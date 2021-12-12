<?php

namespace App\Http\Controllers;

use App\Http\Boundary\ReviewUI;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function __construct()
    {
        $this->ReviewUI = resolve(ReviewUI::class);
    }

    public function ambilFormReview(Request $request) {}
    public function ambilDataReview(Request $request) {}
}
