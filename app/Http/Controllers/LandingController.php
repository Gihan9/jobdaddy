<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Brand;

class LandingController extends Controller
{
    function brand(){
        $brands = Brand::all();
        return view('landing.landing', compact('brands'));
    }
}
