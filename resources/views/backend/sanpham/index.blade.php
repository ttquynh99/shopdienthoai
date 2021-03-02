@extends('backend.layouts.master')
@section('title')
    Danh sách sản phẩm
@endsection

@section('custom-css')
<!-- Các css dành cho thư viện bootstrap-fileinput -->
    <link href="{{ asset('vendor/bootstrap-fileinput/css/fileinput.css') }}" media="all" rel="stylesheet" type="text/css"/>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" crossorigin="anonymous">
    <link href="{{ asset('vendor/bootstrap-fileinput/themes/explorer-fas/theme.css') }}" media="all" rel="stylesheet" type="text/css"/>
@endsection
    
@section('content')
    <!-- @if(Session::has('alert-success'))
        <div class="alert alert-success" role="alert">
        {{Session::get('alert-success')}}
        </div>
    @endif -->
    <h1>Danh sách sản phẩm</h1>
            <table class="table table-striped table-bordered">
                <!-- <a class="btn btn-primary" href="{{route('admin.sanpham.create')}}"> Thêm mới</a> -->
                <tr>
                    <td>Mã</td>
                    <td>Tên</td>
                    <td>Giá bán</td>
                    <td>Màu</td>
                    <td>Hình</td>
                    <td>Nhà sản xuất</td>
                    <td>Hành động</td>
                </tr>
                @foreach($sp as $sp)
                    <tr>
                        <td>{{ $sp->sp_ma}}</td>
                        <td>{{ $sp->sp_ten}}</td>
                        <td>{{ $sp->sp_giaBan}}</td>
                        <td>{{ $sp->sp_mau}}</td>
                        <td>
                            <img src="{{asset('storage/' . $sp->sp_hinh)}}" alt="" class="img-hinh">
                        </td>
                        <td>{{ $sp->nhasanxuat->nsx_ten}}</td>
                        <td>
                            <a href="{{ route('admin.sanpham.edit', ['id' => $sp->sp_ma]) }}" class="btn btn-primary pull-left">Sửa</a>
                            <form method="post" action="{{ route('admin.sanpham.destroy', ['id' => $sp->sp_ma]) }}" class="pull-left">
                                
                                <input type="hidden" name="_method" value="DELETE" />
                                
                                {{ csrf_field() }}
                                <button type="submit" class="btn btn-danger">Xóa</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </table>
@endsection
@section('custom-scripts')
<!-- <script>
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
                        location.href = '{{ route('admin.nhasx.index') }}';
                        debugger;
                    },
                    error: function(jqXHR,textStatus,errorThown){
                    }
                });
            }
        })
    });
});
</script> -->
    
@endsection
