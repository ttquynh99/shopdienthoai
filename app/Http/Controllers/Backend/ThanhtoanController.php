<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Thanhtoan;
use Carbon\Carbon;
use Storage;
use Session;

class ThanhtoanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $thanhtoan = Thanhtoan::all();
        return view('backend.thanhtoan.index')
            ->with('thanhtoan',$thanhtoan);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $thanhtoan = Thanhtoan::all();
        return view('backend.thanhtoan.create')
        ->with('thanhtoan',$thanhtoan);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $tt_ten = $request->tt_ten;
        $tt_diengiai = $request->tt_diengiai;
        $tt_trangthai = $request->tt_trangthai;
       //Luu du lieu
        $tt = new Thanhtoan();
        $tt ->tt_ten = $tt_ten;
        $tt ->tt_diengiai = $tt_diengiai;
        $tt->tt_taomoi = Carbon::now();
        $tt->tt_capnhat = Carbon::now();
        $tt ->tt_trangthai = $tt_trangthai;
        $tt -> save();

       Session::flash('alert-success', 'Thêm mới thành công !');
       // Dieu huong ve trang chu
       return redirect(route('admin.thanhtoan.index'));
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
        $tt= Thanhtoan::find($id);
        return view('backend.thanhtoan.edit')
            ->with('tt', $tt);
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
        $tt= Thanhtoan::find($id);
        $tt ->tt_ten = $request->tt_ten;
        $tt ->tt_diengiai = $request->tt_diengiai;
        $tt ->tt_taomoi = $request->tt_taomoi = Carbon::now();
        $tt ->tt_capnhat = $request->tt_capnhat = Carbon::now();
        $tt ->tt_trangthai = $request->tt_trangthai;
        $tt -> save();
        Session::flash('alert-success', 'Chỉnh sửa thành công !');
        return redirect(route('admin.thanhtoan.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tt= Thanhtoan::find($id);
        $tt->delete();
        Session::flash('alert-success', 'Xóa thành công !');
        return redirect(route('admin.thanhtoan.index'));
    }
}
