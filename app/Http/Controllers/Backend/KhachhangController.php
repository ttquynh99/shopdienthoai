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
        $kh = Khachhang::all();
        return view('backend.khachhang.index')
            ->with('kh',$kh);
    }
    public function create()
    {
        $kh = Khachhang::all();
        return view('backend.khachhang.create')
        ->with('kh',$kh);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $kh = new Khachhang();
        $kh ->kh_hoten = $request->kh_hoten;
        $kh ->kh_taikhoan = $request->kh_taikhoan;
        $kh ->kh_matkhau = $request->kh_matkhau;
        $kh ->kh_ngaySinh = $request->kh_ngaySinh;
        $kh ->kh_diaChi = $request->kh_diaChi;
        $kh ->kh_gioiTinh = $request->kh_gioiTinh;
        $kh ->kh_email = $request->kh_email;
        $kh ->kh_dienThoai = $request->kh_dienThoai;
        $kh -> save();

       Session::flash('alert-success', 'Thêm mới thành công !');
       // Dieu huong ve trang chu
       return redirect(route('admin.khachhang.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $kh= Khachhang::find($id);
        return view('backend.khachhang.edit')
            ->with('kh', $kh);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $kh= Khachhang::where("kh_ma", $id)->first();
        $kh ->kh_hoten = $request->kh_hoten;
        $kh ->kh_taikhoan = $request->kh_taikhoan;
        $kh ->kh_matkhau = $request->kh_matkhau;
        $kh ->kh_ngaySinh = $request->kh_ngaySinh;
        $kh ->kh_diaChi = $request->kh_diaChi;
        $kh ->kh_gioiTinh = $request->kh_gioiTinh;
        $kh ->kh_email = $request->kh_email;
        $kh ->kh_dienThoai = $request->kh_dienThoai;
        $kh -> save();
        Session::flash('alert-success', 'Chỉnh sửa thành công !');
        return redirect(route('admin.khachhang.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $khachhang= Khachhang::find($id);
        $khachhang->delete();
        Session::flash('alert-success', 'Xóa thành công !');
        return redirect(route('admin.khachhang.index'));
    }
}
