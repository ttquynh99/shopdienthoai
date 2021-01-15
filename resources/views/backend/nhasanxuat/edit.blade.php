@extends('backend.layouts.master')
@section('title')
    Chỉnh sửa nhà sản xuất
@endsection

@section('content')
<form name="frmEdit" id="frmEdit" method="post" action="{{route('admin.nhasx.update', ['id' => $nhasx->nsx_ma ] ) }}" >
  {{ csrf_field() }}
  <input type="hidden" name="_method" value="PUT">
  <div class="form-group">
    <label for="">Tên nhà sản xuất</label>
    <input type="text" class="form-control" id="nsx_ten" name="nsx_ten" value="{{ $nhasx->nsx_ten}}" />
  </div>
  <div class="form-group">
    <label for="">Địa chỉ nhà sản xuất</label>
    <input type="text" class="form-control" id="nsx_diachi" name="nsx_diachi" value="{{ $nhasx->nsx_diachi}}" />
  </div>
  <div class="form-group">
    <label for="">Điện thoại nhà sản xuất</label>
    <input type="text" class="form-control" id="nsx_dienthoai" name="nsx_dienthoai" value="{{ $nhasx->nsx_dienthoai}}" />
  </div>
  <button class="btn btn-primary"> Lưu</button>
</form>
@endsection