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
        <div class="content-wrapper" style="height: 765px">
            <div class="container">
              <div class="row">
                <div class="col-sm-12">
                  <div class="card" data-aos="fade-up">
                    <div class="card-body">
                      <div class="aboutus-wrapper">
                        <h1 class="mt-5 text-center mb-5">
                          Đăng Ký tài khoản
                        </h1>
                        @if(Session::has('success'))
                <div class="alert alert-success" role="alert">
                  {{Session::get('success')}}
                </div>
              @endif 
              @if(Session::has('error'))
                <div class="alert alert-danger" role="alert">
                  {{Session::get('error')}}
                </div>
              @endif
                        <div class="row">
                          <div class="col-lg-12 mb-5 mb-sm-2">
                            <form action="{{ route('postregister') }}" method="POST">
                              @csrf
                              <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <label for="">Tên người dùng</label>
                                      <input
                                        type="text"
                                        class="form-control"
                                        id="name"
                                        name="name"
                                        aria-describedby="name"
                                        placeholder="Tên của bạn *"
                                      />
                                      @error('name')
                    <small class="help-block">{{$message}}</small>
                  @enderror
                                    </div>
                                  </div>
                                <div class="col-sm-12">
                                  <div class="form-group">
                                      <label for="">Tên đăng nhập - email</label>
                                    <input
                                    name="email"
                                      type="email"
                                      class="form-control"
                                      id="name"
                                      aria-describedby="name"
                                      placeholder="email *"
                                    />
                                    @error('email')
                    <small class="help-block">{{$message}}</small>
                  @enderror
                                  </div>
                                </div>
                                <div class="col-sm-12">
                                  <div class="form-group">
                                    <label for="">Mật khẩu</label>
                                    <input
                                    name="password"
                                      type="password"
                                      class="form-control"
                                      id="email"
                                      aria-describedby="email"
                                      placeholder="mật khẩu *"
                                    />
                                    @error('password')
                    <small class="help-block">{{$message}}</small>
                  @enderror
                                  </div>
                                </div>
                              </div>
    
                              <div class="row">
                                <div class="col-sm-12">
                                  <div class="form-group">
                                    <button
                                    type="submit"
                                      class="btn btn-lg btn-dark font-weight-bold mt-3"
                                      >Đăng ký</button
                                    >
                                  </div>
                                </div>
                              </div>
                            </form>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
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
