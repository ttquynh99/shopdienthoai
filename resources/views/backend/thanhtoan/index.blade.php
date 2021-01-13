@extends('backend.layouts.master')
@section('title')
    Danh sách hình thức thanh toán
@endsection

@section('custom-css')
<!-- Các css dành cho thư viện bootstrap-fileinput -->
    <link href="{{ asset('vendor/bootstrap-fileinput/css/fileinput.css') }}" media="all" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
    <link href="{{ asset('vendor/bootstrap-fileinput/themes/explorer-fas/theme.css') }}" media="all" rel="stylesheet" type="text/css"/>
@endsection


@section('content')

            <table class="table table-bordered">
                <a class="btn btn-primary" href="{{route('admin.thanhtoan.create')}}"> Thêm mới</a>
                <tr>
                    <td>Mã</td>
                    <td>Tên</td>
                    <td>Hành động</td> 
                </tr>
                @foreach($thanhtoan as $tt)
                    <tr>
                        <td>{{$tt->tt_ma}}</td>
                        <td>{{$tt->tt_ten}}</td>
                        <td>
                            <a href="{{ route ('admin.thanhtoan.edit', ['id' => $tt->tt_ma] )}}" class="btn btn-success"> Sửa</a>
                            <a href="{{ route ('admin.thanhtoan.destroy', ['id' => $tt->tt_ma] )}}" class="btn btn-danger"> Xóa</a>
                        </td>
                    </tr>
                @endforeach
            </table>
@endsection