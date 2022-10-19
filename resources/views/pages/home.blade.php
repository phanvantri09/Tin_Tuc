@extends('pages.index')
@section('content')
<div class="content-wrapper">
    <div class="container">
      <div class="row" data-aos="fade-up">
        <div class="col-xl-8 stretch-card grid-margin">
          <div class="position-relative">
            <img
              src="./home/assets/images/dashboard/banner.jpg"
              alt="banner"
              class="img-fluid"
            />
            <div class="banner-content">
              <div class="badge badge-danger fs-12 font-weight-bold mb-3">
                Mới Nhất
              </div>
              <h1 class="mb-0">ĐẠI DỊCH TOÀN CẦU</h1>
              <h1 class="mb-2">
                Coronavirus bùng phát LIVE Cập nhật: Kỳ thi ICSE, CBSE bị hoãn, 168 chuyến tàu
              </h1>
              <div class="fs-12">
                <span class="mr-2">Ảnh </span>{{rand(10,50)}} phút trước
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-4 stretch-card grid-margin">
          <div class="card bg-dark text-white">
            <div class="card-body">
              <h2>Tin mới</h2>
              @foreach ($data as $dt)
              <div class="d-flex border-bottom-blue pt-3 pb-4 align-items-center justify-content-between">
                <div class="pr-3">
                  <a style="text-decoration; color: white" href="{{ route('content', [ 'title'=>$dt->title,'id'=>$dt->id]) }}"><h5>{{$dt->title}}</h5></a>
                  <div class="fs-12">
                    <span class="mr-2">Tin </span> sáng nay
                  </div>
                </div>
                <div class="rotate-img">
                  @foreach ($image as $img)
                  @if ($dt->id == $img->id_noidung)
                  <a style="text-decoration; color: white" href=""><img
                    src="./admin/images/{{$img->text}}"
                    alt="thumb"
                    class="img-fluid img-lg"
                  /></a>
                  
                  @break
                  @endif
                  @endforeach
                  
                </div>
              </div>
              @endforeach
            </div>
          </div>
        </div>
      </div>
      <div class="row" data-aos="fade-up">
        <div class="col-lg-3 stretch-card grid-margin">
          <div class="card">
            <div class="card-body">
              <h2>Loại tin</h2>
              <ul class="vertical-menu">
                @foreach ($category as $ca)
                <li><a href="{{ route('tabcontent', ['id'=>$ca->id,'name'=>$ca->name]) }}">{{$ca->name}}</a></li>
                @endforeach
              </ul>
            </div>
          </div>
        </div>
        <div class="col-lg-9 stretch-card grid-margin">
          <div class="card">
            <div class="card-body">
              @foreach ($data1 as $dt1)
              <div class="row">
                <div class="col-sm-4 grid-margin">
                  <div class="position-relative">
                    <div class="rotate-img">
                      @foreach ($image as $img)
                      @if ($dt1->id == $img->id_noidung)
                      <a style="text-decoration; color: white" href="{{ route('content', [ 'title'=>$dt1->title,'id'=>$dt1->id]) }}">
                      <img
                        src="./admin/images/{{$img->text}}"
                        alt="thumb"
                        class="img-fluid"
                      />
                      @break
                      @endif
                      @endforeach
                      </a>
                    </div>
                    <div class="badge-positioned">
                      <span class="badge badge-danger font-weight-bold"
                        >Tin mới</span
                      >
                    </div>
                  </div>
                </div>
                <div class="col-sm-8  grid-margin">
                  <a style="text-decoration; color: black" href="{{ route('content', [ 'title'=>$dt1->title,'id'=>$dt1->id]) }}">
                  <h2 class="mb-2 font-weight-600">
                   {{$dt1->title}}
                  </h2>
                  </a>
                  <div class="fs-13 mb-2">
                    <span class="mr-2">Tin </span>{{rand(10, 60)}} phút trước
                  </div>
                </div>
              </div>   
              @endforeach
                
                
              
            </div>
          </div>
        </div>
      </div>
      <div class="row" data-aos="fade-up">
        <div class="col-sm-12">
          <div class="card">
            <div class="card-body">
              <div class="row">
                <div class="col-xl-8">
                  <div class="card-title">
                    Sport light
                  </div>
                  <div class="row">
                    <div class="col-xl-6 col-lg-8 col-sm-6">
                      <div class="rotate-img">
                        <img
                          src="home/assets/images/dashboard/home_16.jpg"
                          alt="thumb"
                          class="img-fluid"
                        />
                      </div>
                      <p class="fs-13 mb-1 text-muted">
                        <span class="mr-2">Ảnh </span>10 phút trước
                      </p>
                      <p class="my-3 fs-15">
                        Lorem Ipsum đã trở thành văn bản giả tiêu chuẩn của ngành kể từ những năm 1500, khi một máy in không xác định
                      </p>
                      <a href="{{ route('home') }}" class="font-weight-600 fs-16 text-dark"
                        >Đọc thêm</a
                      >
                    </div>
                    <div class="col-xl-6 col-lg-4 col-sm-6">
                      @foreach ($data1 as $item)
                      <div>
                        <a style="text-decoration; color: black" href="{{ route('content', [ 'title'=>$item->title,'id'=>$item->id]) }}">
                        <h5 class="font-weight-600 mb-0">
                          {{$item->title}}
                        </h5>
                        </a>
                        <p class="fs-13 text-muted mb-0">
                          <span class="mr-2">Tin </span>{{rand(1, 20)}} phút trước
                        </p>
                      </div>
                      @endforeach
                     
                    </div>
                  </div>
                </div>
                <div class="col-xl-4">
                  <div class="row">
                    
                    <div class="col-sm-12">
                      <div class="card-title">
                        Tin khác
                      </div>
                      @foreach ($data as $dt)
                      <div class="row">
                        <div class="col-sm-12">
                          <div class="border-bottom pb-3">
                            <div class="row">
                              <div class="col-sm-5 pr-2">
                                <div class="rotate-img">
                                  @foreach ($image as $img)
                      @if ($dt->id == $img->id_noidung)
                                  <a style="text-decoration; color: black" href="{{ route('content', [ 'title'=>$dt->title,'id'=>$dt->id]) }}">
                                  <img
                                  src="./admin/images/{{$img->text}}"
                                    alt="thumb"
                                    class="img-fluid w-100"
                                  />

                                  </a>
                                  @break
                                  @endif
                                  @endforeach
                                </div>
                              </div>
                              <div class="col-sm-7 pl-2">
                                <p class="fs-16 font-weight-600 mb-0">
                                  {{$dt->title}}
                                </p>
                                <p class="fs-13 text-muted mb-0">
                                  <span class="mr-2">Tin </span>{{rand(1,30)}}
                                  Phút trước
                                </p>
                                
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                      @endforeach
                      
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
@endsection