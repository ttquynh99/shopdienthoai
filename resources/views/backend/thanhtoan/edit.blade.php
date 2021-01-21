@extends('backend.layouts.master')
@section('title')
   Chỉnh sửa hình thức thanh toán
@endsection

@section('content')
<form name="frmEdit" id="frmEdit" method="post" action="{{route('admin.thanhtoan.update', ['id' => $tt->tt_ma ] ) }}">
  {{ csrf_field() }}
  <input type="hidden" name="_method" value="PUT">
  <div class="form-group">
    <label for="">Tên hình thức thanh toán</label>
    <input type="text" class="form-control" id="tt_ten" name="tt_ten" value="{{$tt->tt_ten}}" />
  </div>
  <div class="form-group">
    <label for="">Diễn giải</label>
    <input type="text" class="form-control" id="tt_diengiai" name="tt_diengiai" value="{{$tt->tt_diengiai}}" />
  </div>
  <div class="form-group">
        <label for="tt_taomoi">Ngày tạo mới</label>
        <input type="text" class="form-control" id="tt_taomoi" name="tt_taomoi" value="{{ $tt->tt_taomoi}}" data-mask-datetime>
    </div>
    <div class="form-group">
        <label for="tt_capnhat">Ngày cập nhật</label>
        <input type="text" class="form-control" id="tt_capnhat" name="tt_capnhat" value="{{ $tt->tt_capnhat }}" data-mask-datetime>
    </div>
    <div class="form-group">
    <label for="">Trạng thái</label>
    <select name="tt_trangthai" id="tt_trangthai">
    <option value="1" {{old('tt_trangthai') == 1 ? 'selected' : ''}}>Đã thanh toán</option>
    <option value="2" {{old('tt_trangthai') == 2 ? 'selected' : ''}}>Chưa thanh toán</option>
    </select>
  </div>

  <button class="btn btn-primary"> Lưu</button>
</form>
@endsection
