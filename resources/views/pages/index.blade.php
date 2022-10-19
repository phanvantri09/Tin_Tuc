<!DOCTYPE html>
<html lang="zxx">
  <head>
    <!-- Required meta tags -->
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <base href="{{asset('')}}">
    <title>Trang chủ</title>
    <!-- plugin css for this page -->
    <link
      rel="stylesheet"
      href="./home/assets/vendors/mdi/css/materialdesignicons.min.css"
    />
    <link rel="stylesheet" href="./home/assets/vendors/aos/dist/aos.css/aos.css" />

    <!-- End plugin css for this page -->
    <link rel="shortcut icon" href="./home/assets/images/favicon.png" />

    <!-- inject:css -->
    <link rel="stylesheet" href="./home/assets/css/style.css">
    <!-- endinject -->
  </head>

  <body>
    <div class="container-scroller">
      <div class="main-panel">
        <!-- partial:partials/_navbar.html -->
        <header id="header">
          <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light">
              <div class="navbar-top">
                <div class="d-flex justify-content-between align-items-center">
                  <ul class="navbar-top-left-menu">
                    {{-- <li class="nav-item">
                      <a href="pages/index-inner.html" class="nav-link">Advertise</a>
                    </li>
                    <li class="nav-item">
                      <a href="pages/aboutus.html" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Events</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">Write for Us</a>
                    </li>
                    <li class="nav-item">
                      <a href="#" class="nav-link">In the Press</a>
                    </li> --}}
                  </ul>
                  <ul class="navbar-top-right-menu">
                    {{-- <li class="nav-item"> --}}
                      {{-- <form class="nav-link" method="GET" action="{{ route('search') }}">
                        @csrf
                        <input class="mdi mdi-magnify" type="text" name="key">
                        <button style="border: none; background: none" type="submit" href="#" class="nav-link"><i class="mdi mdi-magnify"></i></button>
                      </form> --}}
                      <form class="nav-item" method="GET" action="{{ route('search') }}">
                        @csrf
                        <input class="nav-link" type="text" name="key">
                        <button class="nav-link" style="border: none; background: none; font-size: 20px" type="submit"><i class="mdi mdi-magnify"></i></button>
                      </form>
                    {{-- </li> --}} 
                    @auth
                    <li class="nav-item">
                      <a href="{{ route('home') }}" class="nav-link">{{Auth::user()->name}}</a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('logout') }}" class="nav-link">Đăng xuất</a>
                    </li>
                    @else
                    <li class="nav-item">
                      <a href="{{ route('login') }}" class="nav-link">Đăng nhập</a>
                    </li>
                    <li class="nav-item">
                      <a href="{{ route('register') }}" class="nav-link">Đăng ký</a>
                    </li>
                    @endauth
                    
                  </ul>
                </div>
              </div>
              <div class="navbar-bottom">
                <div class="d-flex justify-content-between align-items-center">
                  <div>
                    <a class="navbar-brand" href="{{ route('home') }}"
                      ><img src="./home/assets/images/logo.svg" alt=""
                    /></a>
                  </div>
                  <div>
                    <button
                      class="navbar-toggler"
                      type="button"
                      data-target="#navbarSupportedContent"
                      aria-controls="navbarSupportedContent"
                      aria-expanded="false"
                      aria-label="Toggle navigation"
                    >
                      <span class="navbar-toggler-icon"></span>
                    </button>
                    <div
                      class="navbar-collapse justify-content-center collapse"
                      id="navbarSupportedContent"
                    >
                      <ul
                        class="navbar-nav d-lg-flex justify-content-between align-items-center"
                      >
                        <li>
                          <button class="navbar-close">
                            <i class="mdi mdi-close"></i>
                          </button>
                        </li>
                        <li class="nav-item active">
                          <a class="nav-link" href="{{ route('home') }}">Trang chủ</a> 
                        </li>
                        @foreach ($category2 as $item)
                        <li class="nav-item">
                          <a class="nav-link" href="{{ route('tabcontent',['id'=>$item->id,'name'=>$item->name]) }}">{{$item->name}}</a>
                        </li>
                        @endforeach
                        
                      </ul>
                    </div>
                  </div>
                  <ul class="social-media">
                    <li>
                      <a href="#">
                        <i class="mdi mdi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-youtube"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-twitter"></i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </nav>
          </div>
        </header>

        <!-- partial -->
        <div class="flash-news-banner">
          <div class="container">
            <div class="d-lg-flex align-items-center justify-content-between">
              <div class="d-flex align-items-center">
                <span class="badge badge-dark mr-3">Xin chào</span>
                <p class="mb-0">
                  Chúc bạn một ngày tốt lành, cảm ơn bạn đã xem thông tin từ trang của chúng tôi, thân ái.
                </p>
              </div>
              <div class="d-flex">
                <span class="mr-3 text-danger"> Hôm nay: {{ date("d-m-Y")}}
                  </span>
                <span class="text-danger"></span>
              </div>
            </div>
          </div>
        </div>
        
        @yield('content')
        <!-- main-panel ends -->
        <!-- container-scroller ends -->

        <!-- partial:partials/_footer.html -->
        <footer>
          <div class="footer-top">
            <div class="container">
              <div class="row">
                <div class="col-sm-5">
                  <img src="assets/images/logo.svg" class="footer-logo" alt="" />
                  <h5 class="font-weight-normal mt-4 mb-5">
                    Trang web thời trang tin tức, giải trí, âm nhạc của bạn. Chúng tôi cung cấp cho bạn những tin tức nóng hổi và video mới nhất trực tiếp từ ngành công nghiệp giải trí.
                  </h5>
                  <ul class="social-media mb-3">
                    <li>
                      <a href="#">
                        <i class="mdi mdi-facebook"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-youtube"></i>
                      </a>
                    </li>
                    <li>
                      <a href="#">
                        <i class="mdi mdi-twitter"></i>
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="col-sm-4">
                  <h3 class="font-weight-bold mb-3">BÀI ĐĂNG GẦN ĐÂY</h3>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="footer-border-bottom pb-2">
                        <div class="row">
                          <div class="col-3">
                            <img
                              src="home/assets/images/dashboard/home_1.jpg"
                              alt="thumb"
                              class="img-fluid"
                            />
                          </div>
                          <div class="col-9">
                            <h5 class="font-weight-600">
                              Nhập khẩu bông từ Mỹ tăng vọt là điều các nhà kinh doanh Mỹ dự đoán
                            </h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="footer-border-bottom pb-2 pt-2">
                        <div class="row">
                          <div class="col-3">
                            <img
                              src="home/assets/images/dashboard/home_2.jpg"
                              alt="thumb"
                              class="img-fluid"
                            />
                          </div>
                          <div class="col-9">
                            <h5 class="font-weight-600">
                              WHO về corona
                            </h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-sm-12">
                      <div>
                        <div class="row">
                          <div class="col-3">
                            <img
                              src="home/assets/images/dashboard/home_3.jpg"
                              alt="thumb"
                              class="img-fluid"
                            />
                          </div>
                          <div class="col-9">
                            <h5 class="font-weight-600 mb-3">
                              Các sản phẩm của sinh viên ngày càng được đánh giá cao
                            </h5>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-sm-3">
                  <h3 class="font-weight-bold mb-3">Thể loại</h3>
                  @foreach ($category1 as $item)
                  <div class="footer-border-bottom pb-2">
                    <div class="d-flex justify-content-between align-items-center">
                      <a style="color: white" href="{{ route('tabcontent', ['id'=>$item->id,'name'=>$item->name]) }}"><h5 class="mb-0 font-weight-600">{{$item->name}}</h5></a>
                      
                      <div class="count">{{rand(1,7)}}</div>
                    </div>
                  </div>
                  @endforeach
                  
                </div>
              </div>
            </div>
          </div>
          {{-- <div class="footer-bottom">
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <div class="d-sm-flex justify-content-between align-items-center">
                    <div class="fs-14 font-weight-600">
                      © 2020 @ <a href="https://www.bootstrapdash.com/" target="_blank" class="text-white"> BootstrapDash</a>. All rights reserved.
                    </div>
                    <div class="fs-14 font-weight-600">
                      Handcrafted by <a href="https://www.bootstrapdash.com/" target="_blank" class="text-white">BootstrapDash</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div> --}}
        </footer>

        <!-- partial -->
      </div>
    </div>
    <!-- inject:js -->
    <script src="./home/assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- plugin js for this page -->
    <script src="./home/assets/vendors/aos/dist/aos.js/aos.js"></script>
    <!-- End plugin js for this page -->
    <!-- Custom js for this page-->
    <script src="./home/assets/js/demo.js"></script>
    <script src="./home/assets/js/jquery.easeScroll.js"></script>
    <!-- End custom js for this page-->
  </body>
</html>
