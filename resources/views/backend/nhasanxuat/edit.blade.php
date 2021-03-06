@extends('backend.layouts.master')
@section('title')
    Chỉnh sửa nhà sản xuất
@endsection

@section('content')
<form name="frmEdit" id="frmEdit" method="post" action="{{route('admin.nhasx.update', ['id' => $nsx->nsx_ma ] ) }}" >
  {{ csrf_field() }}
  <input type="hidden" name="_method" value="PUT">
  <div class="form-group">
    <label for="">Tên nhà sản xuất</label>
    <input type="text" class="form-control" id="nsx_ten" name="nsx_ten" value="{{ $nsx->nsx_ten}}" />
  </div>
  <div class="form-group">
    <label for="">Địa chỉ nhà sản xuất</label>
    <input type="text" class="form-control" id="nsx_diachi" name="nsx_diachi" value="{{ $nsx->nsx_diachi}}" />
  </div>
  <div class="form-group">
    <label for="">Điện thoại nhà sản xuất</label>
    <input type="text" class="form-control" id="nsx_dienthoai" name="nsx_dienthoai" value="{{ $nsx->nsx_dienthoai}}" />
  </div>
  <div class="form-group">
        <label for="nsx_taomoi">Ngày tạo mới</label>
        <input type="text" class="form-control" id="nsx_taomoi" name="nsx_taomoi" value="{{ old('nsx_taomoi', $nsx->nsx_taomoi) }}" data-mask-datetime>
    </div>
    <div class="form-group">
        <label for="nsx_capnhat">Ngày cập nhật</label>
        <input type="text" class="form-control" id="nsx_capnhat" name="nsx_capnhat" value="{{ old('nsx_capnhat', $nsx->nsx_capnhat) }}" data-mask-datetime>
    </div>
  <button class="btn btn-primary"> Lưu</button>
</form>
@endsection