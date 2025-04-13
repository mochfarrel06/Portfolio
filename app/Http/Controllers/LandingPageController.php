<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LandingPageController extends Controller
{
    public function halaman_home() {
        return view('pages.home');
    }
}
