@extends('backend.layouts.master')
@section('title')
    Chỉnh sửa sản phẩm
@endsection

@section('content')
<form name="frmEdit" id="frmEdit" method="post" action="{{route('admin.sanpham.update', ['id' => $sp->id ] ) }}" >
  {{ csrf_field() }}
  <input type="hidden" name="_method" value="PUT">
  <div class="form-group">
        <label for="exampleFormControlInput1" class="form-label">Ma san pham</label>
        <input type="text" class="form-control" id="sp_ma" name="sp_ma" value="{{ old('sp_ma',$sp->sp_ma) }}" />
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1" class="form-label">Ten san pham</label>
        <input type="text" class="form-control" id="sp_ten" name="sp_ten" value="{{ old('sp_ten',$sp->sp_ten) }}" />
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1" class="form-label">Gia goc</label>
        <input type="text" class="form-control" id="sp_giagoc" name="sp_giagoc" value="{{ old('sp_giagoc',$sp->sp_giagoc) }}" />
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1" class="form-label">Gia ban</label>
        <input type="text" class="form-control" id="sp_giaBan" name="sp_giaBan" value="{{ old('sp_giaBan',$sp->sp_giaBan) }}" />
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1" class="form-label">Mau</label>
        <input type="text" class="form-control" id="sp_mau" name="sp_mau" value="{{ old('sp_mau',$sp->sp_mau) }}" />
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1" class="form-label">Thong tin</label>
        <input type="text" class="form-control" id="sp_thongTin" name="sp_thongTin" value="{{ old('sp_thongTin',$sp->sp_thongTin) }}" />
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1" class="form-label">Danh gia</label>
        <input type="text" class="form-control" id="sp_danhGia" name="sp_danhGia" value="{{ old('sp_danhGia',$sp->sp_danhGia) }}" />
    </div>
    <div class="form-group">
        <label for="sp_taoMoi">Ngày tạo mới</label>
        <input type="text" class="form-control" id="sp_taoMoi" name="sp_taoMoi" value="{{ old('sp_taoMoi',$sp->sp_taoMoi) }}">
    </div>
    <div class="form-group">
        <label for="sp_capNhat">Ngày cập nhật</label>
        <input type="text" class="form-control" id="sp_capNhat" name="sp_capNhat" value="{{ old('sp_capNhat',$sp->sp_capNhat) }}">
    </div>
    <select name="sp_trangThai" class="form-control">
        <option value="1" {{ old('sp_trangThai', $sp->sp_trangThai) == 1 ? "selected" : "" }}>Khóa</option>
        <option value="2" {{ old('sp_trangThai', $sp->sp_trangThai) == 2 ? "selected" : "" }}>Khả dụng</option>
    </select>
    <div class="form-group">
        <label for="exampleFormControlInput1" class="form-label">Loai</label>
        <select name="nsx_ma" id="nsx_ma">
            @foreach($nsx as $nsx)
            @if(old('nsx_ma', $sp->nsx_ma) == $nsx->nsx_ma)
                <option value="{{ $nsx->nsx_ma }}" selected>{{ $nsx->nsx_ten }}</option>
                @else
                <option value="{{ $nsx->nsx_ma }}">{{ $nsx->nsx_ten }}</option>
            @endif
            @endforeach
        </select>
    </div>
    <div class="form-group">
        <div>
        <label>Hình ảnh sản phẩm</label>
        <input id="sp_hinh" type="file" name="sp_hinh" value="{{ old('sp_hinh',$sp->sp_hinh )}}">
        </div>
    </div>
  <button class="btn btn-primary"> Lưu</button>
</form>
@endsection