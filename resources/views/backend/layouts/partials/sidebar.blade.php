<style>
.sidebar{
    margin-bottom: 0;
      border-radius: 0;
      background-image: linear-gradient(to bottom,black, gray ,LightPink);
      height:720px;
      color: white;
}

</style>





<nav class="col-md-2 d-none d-md-block bg-light sidebar">
    <div class="sidebar-sticky">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link active" href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-home"><path d="M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path><polyline points="9 22 9 12 15 12 15 22"></polyline></svg>
                Dashboard <span class="sr-only">(current)</span>
                </a>
            </li>
            <!-- Danh sach nha san xuat -->
            <li class="nav-item">
                <a href="#nsxSubMenu" data-toggle="collapse" aria-expanded="false" class="nav-link dropdown-toggle {{ (strpos(Route::currentRouteName(), 'admin.nhasx') === 0) ? 'active' : '' }}">
                    <span data-feather="package"></span> Nhà sản xuất
                </a>
                <ul class="{{ (strpos(Route::currentRouteName(), 'admin.nhasx') === 0) ? 'collapse show' : 'collapse' }}" id="nsxSubMenu">
                    <li class="nav-item">
                        <a class="nav-link {{ (strpos(Route::currentRouteName(), 'admin.nhasx.index') === 0) ? 'active' : '' }}" href="{{ route('admin.nhasx.index') }}/">
                            <span data-feather="list"></span>
                            Danh sách nhà sản xuất
                        </a>
                    </li>
                </ul>
            
                <!-- Danh sach hinh thuc thanh toan -->
                <li class="nav-item">
                <a href="#ttSubMenu" data-toggle="collapse" aria-expanded="false" class="nav-link dropdown-toggle {{ (strpos(Route::currentRouteName(), 'admin.thanhtoan') === 0) ? 'active' : '' }}">
                    <span data-feather="package"></span> Hình thức thanh toán
                </a>
                <ul class="{{ (strpos(Route::currentRouteName(), 'admin.thanhtoan') === 0) ? 'collapse show' : 'collapse' }}" id="ttSubMenu">
                    <li class="nav-item">
                        <a class="nav-link {{ (strpos(Route::currentRouteName(), 'admin.thanhtoan.index') === 0) ? 'active' : '' }}" href="{{ route('admin.thanhtoan.index') }}/">
                            <span data-feather="list"></span>
                            Danh sách hình thức thanh toán
                        </a>
                    </li>
                </ul>
            </li>
            </li>
        </ul>
    </div>
</nav>