@extends('backend.layouts.master')
@section('title')
    Danh sách khách hàng
@endsection

@section('custom-css')
<!-- Các css dành cho thư viện bootstrap-fileinput -->
    <link href="{{ asset('vendor/bootstrap-fileinput/css/fileinput.css') }}" media="all" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
    <link href="{{ asset('vendor/bootstrap-fileinput/themes/explorer-fas/theme.css') }}" media="all" rel="stylesheet" type="text/css"/>
@endsection
    
@section('content')
@if(Session::has('alert-success'))
    <div class="alert alert-success" role="alert">
    {{Session::get('alert-success')}}
    </div>
    @endif

            <table class="table table-bordered">
                <a class="btn btn-primary" href="{{route('admin.khachhang.create')}}"> Thêm mới</a>
                <tr>
                    <td>Mã</td>
                    <td>Họ và tên</td>
                    <td>Tài khoản</td>
                    <td>Email</td>
                    <td>Điện thoại</td>
                    <td>Hành động</td> 
                </tr>
                @foreach($kh as $kh)
                    <tr>
                        <td>{{$kh->kh_ma}}</td>
                        <td>{{$kh->kh_hoten}}</td>
                        <td>{{$kh->kh_taikhoan}}</td>
                        <td>{{$kh->kh_email}}</td>
                        <td>{{$kh->kh_dienThoai}}</td>
                        <td>
                            <a href="{{ route ('admin.khachhang.edit', ['id' => $kh->kh_ma] )}}" class="btn btn-success"> Sửa</a>
                                <form class="frmDelete " method="post" name ="frmDelete" data-id="{{$kh->kh_ma}}" class="btn btn-danger" action="{{route('admin.khachhang.destroy',['id'=>$kh->kh_ma])}}">
                                {{ csrf_field() }}
                                    <input type="hidden" name='_method' value="DELETE" />
                                    <button class="btn btn-danger" >Xóa</button>
                                </form>
                        </td>
                    </tr>
                @endforeach
            </table>
@endsection
@section('custom-scripts')
<script>
$(function(){
    $('.frmDelete').submit(function(e){
        e.preventDefault();
        var id=$(this).data('id');
        swal.fire({
            title: 'Bạn có chắc muốn xóa?',
            text: 'Bạn sẽ không thể phục hồi khi xóa!',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'Có, hãy xóa',
            cancelButtonText: 'Không',
            confirmButtonColor: '#3085d6',
            cancelButtonColor:'#d33'
            }).then((result) => {
            if(result.isConfirmed) {
                $.ajax({
                    type:'post',
                    url: $(this).attr('action'),
                    data: {
                        id: id,
                        _token:$(this).find('[name=_token]').val(),
                        _method:$(this).find('[name=_method]').val()
                    },
                    success: function(data, textStatus, jqXHR){
                        location.href = '{{ route('admin.khachhang.index') }}';
                        debugger;
                    },
                    error: function(jqXHR,textStatus,errorThown){
                    }
                });
            }
        })
    });
});
</script>
    
@endsection
