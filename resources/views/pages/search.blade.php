@extends('pages.index')
@section('content')
<div class="content-wrapper">
    <div class="container">
      <div class="col-sm-12">
        <div class="card" data-aos="fade-up">
          <div class="card-body">
            <div class="row">
              <div class="col-sm-12">
                <h1 class="font-weight-600 mb-4">
                  Danh sách tin sau tìm kiếm là:
                </h1>
              </div>
            </div>
            <div class="row">
              <div class="col-lg-8">
                  @foreach ($datatab as $item)
                  <div class="row">
                    <div class="col-sm-4 grid-margin">
                      <div class="rotate-img">
                        @foreach ($image as $img)
                        @if ($item->id == $img->id_noidung)
                        <a href="{{ route('content', ['title'=>$item->title,'id'=>$item->id]) }}">
                          <img
                          src="./admin/images/{{$img->text}}"
                            alt="banner"
                            class="img-fluid"
                          />
                        </a>
                        @break
                        @endif
                        @endforeach
                      </div>
                    </div>
                    <div class="col-sm-8 grid-margin">
                      <a style="text-decoration; color: black" href="{{ route('content', ['title'=>$item->title,'id'=>$item->id]) }}">
                      <h2 class="font-weight-600 mb-2">
                        
                        {{$item->title}}
                      </h2>
                    </a>
                      <p class="fs-13 text-muted mb-0">
                        <span class="mr-2">Tin </span>{{rand(4,70)}} phút trước
                      </p>
                      
                    </div>
                  </div>
                  @endforeach
                
              </div>
              <div class="col-lg-4">
                <h2 class="mb-4 text-primary font-weight-600">
                 Tin mới
                </h2>
                @foreach ($data1 as $item)
                <div class="row">
                  <div class="col-sm-12">
                    <div class="pt-4">
                      <div class="row">
                        <div class="col-sm-8">
                          <a style="text-decoration; color: black" href="{{ route('content', ['title'=>$item->title,'id'=>$item->id]) }}">
                          <h5 class="font-weight-600 mb-1">
                            {{$item->title}}
                          </h5>
                        </a>
                          <p class="fs-13 text-muted mb-0">
                            <span class="mr-2">Tin </span>{{rand(10, 90)}}
                          </p>
                        </div>
                        <div class="col-sm-4">
                          <div class="rotate-img">
                            @foreach ($image as $img)
                            @if ($item->id == $img->id_noidung)
                            <a href="{{ route('content', ['title'=>$item->title,'id'=>$item->id]) }}">
                            <img
                            src="./admin/images/{{$img->text}}"
                              alt="banner"
                              class="img-fluid"
                            />
                            </a>
                            @break
                        @endif
                        @endforeach
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
                
                <div class="trending">
                  <h2 class="mb-4 text-primary font-weight-600">
                    Nổi Bật
                  </h2>
                  @foreach ($data as $item)
                  <div class="mb-4">
                    <div class="rotate-img">
                      @foreach ($image as $img)
                            @if ($item->id == $img->id_noidung)
                            <a href="{{ route('content', ['title'=>$item->title,'id'=>$item->id]) }}">
                      <img
                      src="./admin/images/{{$img->text}}"
                        alt="banner"
                        class="img-fluid"
                      />
                            </a>
                      @break
                        @endif
                        @endforeach
                    </div>
                    
                    <a style="text-decoration; color: black" href="{{ route('content', ['title'=>$item->title,'id'=>$item->id]) }}">
                    <h3 class="mt-3 font-weight-600">
                      {{$item->title}}

                    </h3>
                  </a>
                    <p class="fs-13 text-muted mb-0">
                      <span class="mr-2">Tin </span>{{rand(3,70)}}
                    </p>
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
@endsection