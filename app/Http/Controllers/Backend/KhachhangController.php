<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Khachhang;
use Carbon\Carbon;
use Storage;
use Session;

class KhachhangController extends Controller
{
    public function index()
    {
        $dskh = Loai::all();
        return view('backend.khachhang.index')
            ->with('dskh',$dskh);
    }
}
