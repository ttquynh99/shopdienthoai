@extends('backend.layouts.master')
@section('title')
    Thêm mới sản phẩm
@endsection
@section('custom-css')
<!-- Các css dành cho thư viện bootstrap-fileinput -->
    <link href="{{ asset('vendor/bootstrap-fileinput/css/fileinput.css') }}" media="all" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
    <link href="{{ asset('vendor/bootstrap-fileinput/themes/explorer-fas/theme.css') }}" media="all" rel="stylesheet" type="text/css"/>
@endsection
@section('content')

<h1>Thêm mới sản phẩm</h1>

<form name="frmCreate" id="frmCreate" method="post" action="{{ route('admin.sanpham.store') }}" enctype="multipart/form-data">
    {{ csrf_field()}}
    <div class="form-group">
        <label for="exampleFormControlInput1" class="form-label">Ma san pham</label>
        <input type="text" class="form-control" id="sp_ma" name="sp_ma" value="{{ old('sp_ma') }}" />
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1" class="form-label">Ten san pham</label>
        <input type="text" class="form-control" id="sp_ten" name="sp_ten" value="{{ old('sp_ten') }}" />
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1" class="form-label">Gia goc</label>
        <input type="text" class="form-control" id="sp_giagoc" name="sp_giagoc" value="{{ old('sp_giagoc') }}" />
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1" class="form-label">Gia ban</label>
        <input type="text" class="form-control" id="sp_giaBan" name="sp_giaBan" value="{{ old('sp_giaBan') }}" />
    </div>
    <div class="form-group">
        <div>
        <label>Hình ảnh liên quan sản phẩm</label>
        <input id="sp_hinh" type="file" name="sp_hinh" >
        </div>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1" class="form-label">Mau</label>
        <input type="text" class="form-control" id="sp_mau" name="sp_mau" value="{{ old('sp_mau') }}" />
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1" class="form-label">Thong tin</label>
        <input type="text" class="form-control" id="sp_thongTin" name="sp_thongTin" value="{{ old('sp_thongTin') }}" />
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1" class="form-label">Danh gia</label>
        <input type="text" class="form-control" id="sp_danhGia" name="sp_danhGia" value="{{ old('sp_danhGia') }}" />
    </div>
    <div class="form-group">
        <label for="sp_taoMoi">Ngày tạo mới</label>
        <input type="text" class="form-control" id="sp_taoMoi" name="sp_taoMoi" value="{{ old('sp_taoMoi') }}">
    </div>
    <div class="form-group">
        <label for="sp_capNhat">Ngày cập nhật</label>
        <input type="text" class="form-control" id="sp_capNhat" name="sp_capNhat" value="{{ old('sp_capNhat') }}">
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1" class="form-label">Trạng thái</label>
        <select name="sp_trangThai" id="sp_trangThai">
            <option value="1" {{ old('sp_trangThai') == 1 ? 'selected' : '' }}>Khoá</option>
            <option value="2" {{ old('sp_trangThai') == 2 ? 'selected' : '' }}>Khả dụng</option>
        </select>
    </div>
    <div class="form-group">
        <label for="exampleFormControlInput1" class="form-label">Loai</label>
        <select name="nsx_ma" id="nsx_ma">
            @foreach($nsx as $nsx)
            <option value="{{$nsx->nsx_ma}}">{{$nsx->nsx_ten}}</option>
            @endforeach
        </select>
    </div>
    <button>Lưu</button>
</form>
@endsection

@section('custom-scripts')
<!-- Các script dành cho thư viện bootstrap-fileinput -->
<script src="{{ asset('vendor/bootstrap-fileinput/js/plugins/sortable.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/bootstrap-fileinput/js/fileinput.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/bootstrap-fileinput/js/locales/fr.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/bootstrap-fileinput/themes/fas/theme.js') }}" type="text/javascript"></script>
<script src="{{ asset('vendor/bootstrap-fileinput/themes/explorer-fas/theme.js') }}" type="text/javascript"></script>

<script>
  $(document).ready(function() {
    $("#sp_hinh").fileinput({
      theme: 'fas',
      showUpload: false,
      showCaption: false,
      browseClass: "btn btn-primary btn-lg",
      fileType: "any",
      previewFileIcon: "<i class='glyphicon glyphicon-king'></i>",
      overwriteInitial: false
    });
  });
</script>

<!-- Các script dành cho thư viện Mặt nạ nhập liệu InputMask -->
<script src="{{ asset('vendor/input-mask/jquery.inputmask.min.js') }}"></script>
<script src="{{ asset('vendor/input-mask/bindings/inputmask.binding.js') }}"></script>

<script>
  $(document).ready(function() {
    // Gắn mặt nạ nhập liệu cho các ô nhập liệu Giá gốc
    $('#sp_giagoc').inputmask({
      alias: 'currency',
      positionCaretOnClick: "radixFocus",
      radixPoint: ".",
      _radixDance: true,
      numericInput: true,
      groupSeparator: ",",
      suffix: ' vnđ',
      min: 0,         // 0 ngàn
      max: 100000000, // 1 trăm triệu
      autoUnmask: true,
      removeMaskOnSubmit: true,
      unmaskAsNumber: true,
      inputtype: 'text',
      placeholder: "0",
      definitions: {
        "0": {
          validator: "[0-9\uFF11-\uFF19]"
        }
      }
    });

    // Gắn mặt nạ nhập liệu cho các ô nhập liệu Giá bán
    $('#sp_giaBan').inputmask({
      alias: 'currency',
      positionCaretOnClick: "radixFocus",
      radixPoint: ".",
      _radixDance: true,
      numericInput: true,
      groupSeparator: ",",
      suffix: ' vnđ',
      min: 0,         // 0 ngàn
      max: 100000000, // 1 trăm triệu
      autoUnmask: true,
      removeMaskOnSubmit: true,
      unmaskAsNumber: true,
      inputtype: 'text',
      placeholder: "0",
      definitions: {
        "0": {
          validator: "[0-9\uFF11-\uFF19]"
        }
      }
    });

    // Gắn mặt nạ nhập liệu cho các ô nhập liệu Ngày tạo mới
    $('#sp_taoMoi').inputmask({
      alias: 'datetime',
      inputFormat: 'yyyy-mm-dd' // Định dạng Năm-Tháng-Ngày
    });

    // Gắn mặt nạ nhập liệu cho các ô nhập liệu Ngày cập nhật
    $('#sp_capNhat').inputmask({
      alias: 'datetime',
      inputFormat: 'yyyy-mm-dd' // Định dạng Năm-Tháng-Ngày
    });
  });
</script>

@endsection


