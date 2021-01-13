@extends('frontend.layouts.master')

@section('title')
    Giới thiệu
@endsection
@section('custom-css')
<!-- Các css dành cho thư viện bootstrap-fileinput -->
    <link href="{{ asset('vendor/bootstrap-fileinput/css/fileinput.css') }}" media="all" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
    <link href="{{ asset('vendor/bootstrap-fileinput/themes/explorer-fas/theme.css') }}" media="all" rel="stylesheet" type="text/css"/>
@endsection


@section('content')


<h1> CÂU HỎI THƯỜNG GẶP </h1>
<div class="container-fluid" style="margin-top : 70px">
    <div class="row">
        <div class="col">
            <a href=""> Cảnh báo giả mạo</a> </br>
            <a href=""> Tháng này có gì mới? </a>
        </div>

        <div class="col">
            <a href=""> Các bước đơn giản để đặt hàng</a> </br>
            <a href=""> Làm thế nào để giao hàng miễn phí </a>
        </div>
            <!-- End content -->
    </div>
</div>
    


@endsection