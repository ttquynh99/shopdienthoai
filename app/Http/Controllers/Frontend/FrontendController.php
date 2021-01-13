<?php

namespace App\Http\Controllers\Frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class FrontendController extends Controller
{
    public function gioi_thieu(){
        return view('frontend.gioithieu');
    }

    public function cauhoi(){
        return view('frontend.cauhoi');
    }
}
