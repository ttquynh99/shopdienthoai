<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Nhasanxuat;

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
        $nhasanxuat = new Nhasanxuat();
        $nhasanxuat->nsx_ten = $nsx_ten;
        $nhasanxuat = $request->nsx_diachi;
        $nhasanxuat = $request->nsx_dienthoai;
        $nhasanxuat->xx_taoMoi = Carbon::now();
        $nhasanxuat->xx_capNhat = Carbon::now();
        $nhasanxuat -> save();

       Session::flash('alert - warning', 'Thêm mới thành công !');
       // Dieu huong ve trang chu
       return redirect(route('admin.nhasanxuat.index'));
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
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $nhasanxuat= Nhasanxuat::find($id);
        $nhasanxuat->delete();

        Session::flash('alert-success', 'Xóa thành công !');
        return redirect(route('admin.nhasanxuat.index'));
    }
}
