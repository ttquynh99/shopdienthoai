<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Trang chủ</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}">
    <style>
      .footer{
        background-color: purple; 
        background-image: linear-gradient(to right, purple, pink);
        color:white;
        .about-company{
          i{font-size: 25px;}
          a{
            color:white;
            transition: color .2s;
            &:hover{color:#4180CB}
          }
        } 
        .location{
          i{font-size: 18px;}
        }
        .copyright p{border-top:1px solid rgba(255,255,255,.1);} 
      

      .pages ul{
      list-style-type: none;
      }
      .pages li a{
        color: white;
        transition: color .2s;
        &:hover{
          text-decoration:none;
          color:#4180CB;
          }
      }
      }
    </style>
</head>
<body>
    <!-- header -->
    <nav style="background-color: #e3f2fd;" >
      <div class="row">
        <div class="col-md-4 text-center" style="padding-left: 150px;">
          <img src="{{ asset('img/logo1.png') }}" alt="" height="80px" weight="80px">
        </div>
        <div class=" col-md-8 ">
          <form class="form-inline">
            <input class="form-control col-md-6 text-center " style="margin: 20px 5px;" type="search" aria-label="Search" >
            <button class="btn btn btn-outline-info my-2 my-sm-0 col-md-2 text-center" type="submit" >Search</button>
          </form>
        </div>
      </div>
    </nav>
    <!-- end header -->
    <!-- body -->
    
    <!-- end body -->
    <!-- menu -->
    <nav class="navbar navbar-expand-lg navbar-light" style="background-color: #e3f2fd;" >
      <a class="navbar-brand" href="#">Navbar</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#">Link</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Dropdown
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
              <a class="dropdown-item" href="#">Action</a>
              <a class="dropdown-item" href="#">Another action</a>
              <div class="dropdown-divider"></div>
              <a class="dropdown-item" href="#">Something else here</a>
            </div>
          </li>
          <li class="nav-item">
            <a class="nav-link disabled" href="#">Disabled</a>
          </li>
        </ul>
      </div>
    </nav>
    <!-- end menu -->
    <!-- footer -->
    <div class="mt-5 pt-5 pb-5 footer">
    <div class="container">
      <div class="row">
        <div class="col-lg-5 col-xs-12 about-company">
          <h2>ZENI SHOP</h2>
          <p class="pr-5 text-white-50">Uy tín, chất lượng! </p>
          <p><a href="#"><i class="fa fa-facebook-square mr-1"></i></a><a href="#"><i class="fa fa-linkedin-square"></i></a></p>
        </div>
        <div class="col-lg-3 col-xs-12 pages">
          <h4 class="mt-lg-0 mt-sm-3"></h4>
            <ul class="m-0 p-0">
              <li> - <a href="#">Giới thiệu</a></li>
              <li> - <a href="#">Câu hỏi thường gặp</a></li>
              <li> - <a href="#">Chính sách riêng tư</a></li>
              <li> - <a href="#">Liên hệ</a></li>
              <li> - <a href="#">Tuyển dụng</a></li>
              <li> - <a href="#">Giải quyết khiếu nại</a></li>
            </ul>
        </div>
        <div class="col-lg-4 col-xs-12 location">
          <h4 class="mt-lg-0 mt-sm-4">Địa chỉ</h4>
          <p>Thành phố Cần Thơ, Việt Nam</p>
          <p class="mb-0"><i class="fa fa-phone mr-3"></i>+1234567891</p></br>
          <p><i>Địa chỉ Email:</i></p> 
          <p><i class="fa fa-envelope-o mr-4">zenishop@gmail.com</i></p>
        </div>
      </div>
      <div class="row mt-3">
        <div class="col copyright">
          <p class=""><small class="text-white-50">© 2021. All Rights Reserved.</small></p>
        </div>
      </div>
    </div>
    </div>
    <!-- end footer -->
</body>
</html>