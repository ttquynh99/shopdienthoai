<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Sanpham;
use App\Nhasanxuat;
use Carbon\Carbon;
use Storage;
use Session;

class SanphamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $sp = Sanpham::all();
        return view('backend.sanpham.index')
            ->with('sp',$sp);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // Sử dụng Eloquent Model để truy vấn dữ liệu
        $nsx = Nhasanxuat::all(); // SELECT * FROM loai

        // Đường dẫn đến view được quy định như sau: <FolderName>.<ViewName>
        // Mặc định đường dẫn gốc của method view() là thư mục `resources/views`
        // Hiển thị view `backend.sanpham.create`
        return view('backend.sanpham.create')
        // với dữ liệu truyền từ Controller qua View, được đặt tên là `danhsachloai`
        ->with('nsx', $nsx);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       //Luu du lieu
        $sp = new Sanpham();
        $sp->sp_ma = $request->sp_ma;
        $sp->sp_ten = $request->sp_ten;
        $sp->sp_giagoc = $request->sp_giagoc;
        $sp->sp_giaBan = $request->sp_giaBan;
        if($request->hasFile('sp_hinh'))
        {
            $file = $request->sp_hinh;

            // Lưu tên hình vào column sp_hinh
            $sp->sp_hinh = $file->getClientOriginalName();
            
            // Chép file vào thư mục "photos"
            $fileSaved = $file->storeAs('public/photos/', $sp->sp_hinh);
        }
        
        $sp->sp_mau = $request->sp_mau;
        $sp->sp_thongTin = $request->sp_thongTin;
        $sp->sp_danhGia = $request->sp_danhGia;
        $sp->sp_taoMoi = $request->sp_taoMoi;
        $sp->sp_capNhat = $request->sp_capNhat;
        $sp->sp_trangThai = $request->sp_trangThai;
        $sp->nsx_ma = $request->nsx_ma;
        $sp -> save();

       Session::flash('alert-success', 'Thêm mới thành công !');
       // Dieu huong ve trang chu
       return redirect(route('admin.sanpham.index'));
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
        
        $nsx = Nhasanxuat::all();
        $sp = Sanpham::where("sp_ma", $id)->first();
        return view('backend.sanpham.edit')
        ->with('nsx', $nsx)
        ->with('sp', $sp);
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
        $sp= Sanpham::find($id);
        $sp->sp_ma = $request->sp_ma;
        $sp->sp_ten = $request->sp_ten;
        $sp->sp_giagoc = $request->sp_giagoc;
        $sp->sp_giaBan = $request->sp_giaBan;
        $sp->sp_hinh = $request->sp_hinh;
        $sp->sp_mau = $request->sp_mau;
        $sp->sp_thongTin = $request->sp_thongTin;
        $sp->sp_danhGia = $request->sp_danhGia;
        $sp->sp_taoMoi = $request->sp_taoMoi;
        $sp->sp_capNhat = $request->sp_capNhat;
        $sp->sp_trangThai = $request->sp_trangThai;
        $sp->nsx_ma = $request->nsx_ma;


        if($request->hasFile('sp_hinh'))
        {
            // Xóa hình cũ để tránh rác
            Storage::delete('public/photos/' . $sp->sp_hinh);

            // Upload hình mới
            // Lưu tên hình vào column sp_hinh
            $file = $request->sp_hinh;
            $sp->sp_hinh = $file->getClientOriginalName();
            
            // Chép file vào thư mục "photos"
            $fileSaved = $file->storeAs('public/photos', $sp->sp_hinh);
        }
        $sp->save();

       Session::flash('alert-success', 'Chỉnh sửa thành công !');
       // Dieu huong ve trang chu
       return redirect(route('admin.sanpham.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $sp= Sanpham::find($id);
        $sp->delete();
        Session::flash('alert-success', 'Xóa thành công !');
        return redirect(route('admin.sanpham.index'));
    }
}
