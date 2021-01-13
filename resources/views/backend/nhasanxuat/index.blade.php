@extends('backend.layouts.master')
@section('title')
    Danh sách nhà sản xuất
@endsection

@section('custom-css')
<!-- Các css dành cho thư viện bootstrap-fileinput -->
    <link href="{{ asset('vendor/bootstrap-fileinput/css/fileinput.css') }}" media="all" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
    <link href="{{ asset('vendor/bootstrap-fileinput/themes/explorer-fas/theme.css') }}" media="all" rel="stylesheet" type="text/css"/>
@endsection


@section('content')

            <table class="table table-bordered">
                <a class="btn btn-primary" href="{{route('admin.nhasx.create')}}"> Thêm mới</a>
                <tr>
                    <td>Mã</td>
                    <td>Tên</td>
                    <td>Địa chỉ</td>
                    <td>Điện thoại</td>
                    <td>Hành động</td> 
                </tr>
                @foreach($nsx as $nhasx)
                    <tr>
                        <td>{{$nhasx->nsx_ma}}</td>
                        <td>{{$nhasx->nsx_ten}}</td>
                        <td>{{$nhasx->nsx_diachi}}</td>
                        <td>{{$nhasx->nsx_dienthoai}}</td>
                        <td>
                            <a href="{{ route ('admin.nhasx.edit', ['id' => $nhasx->nsx_ma] )}}" class="btn btn-success"> Sửa</a>
                            <a href="{{ route ('admin.nhasx.destroy', ['id' => $nhasx->nsx_ma] )}}" class="btn btn-danger"> Xóa</a>
                        </td>
                    </tr>
                @endforeach
            </table>
@endsection