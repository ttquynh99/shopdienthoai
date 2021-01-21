@extends('backend.layouts.master')
@section('title')
    Thêm mới nhà sản xuất
@endsection

@section('content')
<form name="frmCreate" id="frmCreate" method="post" action="{{route('admin.nhasx.store') }}" enctype="multipart/form-data" >
  {{ csrf_field() }}
  <div class="form-group">
    <label for="">Tên nhà sản xuất</label>
    <input type="text" class="form-control" id="nsx_ten" name="nsx_ten" value="{{old('nsx_ten')}}" />
  </div>
  <div class="form-group">
    <label for="">Địa chỉ nhà sản xuất</label>
    <input type="text" class="form-control" id="nsx_diachi" name="nsx_diachi" value="{{old('nsx_diachi')}}" />
  </div>
  <div class="form-group">
    <label for="">Điện thoại nhà sản xuất</label>
    <input type="text" class="form-control" id="nsx_dienthoai" name="nsx_dienthoai" value="{{old('nsx_dienthoai')}}" />
  </div>
  <div class="form-group">
        <label for="nsx_taomoi">Ngày tạo mới</label>
        <input type="text" class="form-control" id="nsx_taomoi" name="nsx_taomoi" value="{{ old('nsx_taomoi') }}" data-mask-datetime>
    </div>
    <div class="form-group">
        <label for="nsx_capnhat">Ngày cập nhật</label>
        <input type="text" class="form-control" id="nsx_capnhat" name="nsx_capnhat" value="{{ old('nsx_capnhat') }}" data-mask-datetime>
    </div>
  <button class="btn btn-primary"> Lưu</button>
</form>
@endsection
