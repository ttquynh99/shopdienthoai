<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Nhasanxuat;
use Carbon\Carbon;
use Storage;
use Session;

class NhasanxuatController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $nsx = Nhasanxuat::all();
        return view('backend.nhasanxuat.index')
            ->with('nsx',$nsx);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $nsx = Nhasanxuat::all();
        return view('backend.nhasanxuat.create')
        ->with('nsx',$nsx);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nsx_ten = $request->nsx_ten;
        $nsx_diachi = $request->nsx_diachi;
        $nsx_dienthoai = $request->nsx_dienthoai;
       //Luu du lieu
        $nsx = new Nhasanxuat();
        $nsx ->nsx_ten = $nsx_ten;
        $nsx ->nsx_diachi = $nsx_diachi;
        $nsx ->nsx_dienthoai = $nsx_dienthoai;
        $nsx->nsx_taomoi = Carbon::now();
        $nsx->nsx_capnhat = Carbon::now();
        $nsx -> save();

       Session::flash('alert-success', 'Thêm mới thành công !');
       // Dieu huong ve trang chu
       return redirect(route('admin.nhasx.index'));
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
        $nsx= Nhasanxuat::find($id);
        return view('backend.nhasanxuat.edit')
            ->with('nsx', $nsx);
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
        $nsx= Nhasanxuat::find($id);
        $nsx ->nsx_ten = $request->nsx_ten;
        $nsx ->nsx_diachi = $request->nsx_diachi;
        $nsx ->nsx_dienthoai = $request->nsx_dienthoai;
        $nsx ->nsx_taomoi = $request->nsx_taomoi = Carbon::now();
        $nsx ->nsx_capnhat = $request->nsx_capnhat = Carbon::now();
        $nsx -> save();
        Session::flash('alert-success', 'Chỉnh sửa thành công !');
        return redirect(route('admin.nhasx.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nsx= Nhasanxuat::find($id);
        $nsx->delete();
        Session::flash('alert-success', 'Xóa thành công !');
        return redirect(route('admin.nhasx.index'));
    }
}
