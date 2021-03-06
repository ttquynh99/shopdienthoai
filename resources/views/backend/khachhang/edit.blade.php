@extends('backend.layouts.master')
@section('title')
    Chỉnh sửa khách hàng
@endsection

@section('content')
<form name="frmEdit" id="frmCreate" method="post" action="{{route('admin.khachhang.update', ['id' => $kh->kh_ma ] ) }}" enctype="multipart/form-data" >
<input type="hidden" name="_method" value="PUT" />
  {{ csrf_field() }}
  <div class="form-group">
        <label class="form-label">Mã khách hàng</label>
        <input type="text" class="form-control" id="kh_ma" name="kh_ma" value="{{ old('kh_ma',$kh->kh_ma) }}" />
    </div>
    <div class="form-group">
        <label class="form-label">Họ và tên khách hàng</label>
        <input type="text" class="form-control" id="kh_hoten" name="kh_hoten" value="{{ old('kh_hoten',$kh->kh_hoten) }}" />
    </div>
    <div class="form-group">
        <label class="form-label">Tài khoản</label>
        <input type="text" class="form-control" id="kh_taikhoan" name="kh_taikhoan" value="{{ old('kh_taikhoan',$kh->kh_taikhoan) }}" />
    </div>
    <div class="form-group">
        <label class="form-label">Mật khẩu</label>
        <input type="password" class="form-control" id="kh_matkhau" name="kh_matkhau" value="{{ old('kh_matkhau',$kh->kh_matkhau) }}" />
    </div>
    <div class="form-group">
        <label class="form-label">Ngày sinh</label>
        <input type="date" class="form-control" id="kh_ngaySinh" name="kh_ngaySinh" value="{{ old('kh_ngaySinh',$kh->kh_ngaySinh) }}" />
    </div>
    <div class="form-group">
        <label class="form-label">Địa chỉ</label>
        <input type="text" class="form-control" id="kh_diaChi" name="kh_diaChi" value="{{ old('kh_diaChi',$kh->kh_diaChi) }}" />
    </div>
    <div class="form-group">
        <label class="form-label">Giới Tính</label>
        <input type="text" class="form-control" id="kh_gioiTinh" name="kh_gioiTinh" value="{{ old('kh_gioiTinh',$kh->kh_gioiTinh) }}" />
    </div>
    <div class="form-group">
        <label for="kh_email">Email</label>
        <input type="emai" class="form-control" id="kh_email" name="kh_email" value="{{ old('kh_email',$kh->kh_email) }}">
    </div>
    <div class="form-group">
        <label for="kh_dienThoai">Điện thoại</label>
        <input type="number" class="form-control" id="kh_dienThoai" name="kh_dienThoai" value="{{ old('kh_dienThoai',$kh->kh_dienThoai) }}">
    </div>
  <button class="btn btn-primary"> Lưu</button>
</form>
@endsection