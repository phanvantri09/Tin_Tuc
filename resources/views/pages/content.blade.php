@extends('pages.index')
@section('content')
<div class="content-wrapper">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="card" data-aos="fade-up">
            <div class="card-body">
              <div class="aboutus-wrapper">
                <h1 class="mt-5">
                  {{$dataaa->title}}
                </h1>
               @if (!empty($image[0]->text))
               <img
               src="./admin/images/{{$image[0]->text}}"
               alt="banner"
               class="img-fluid mb-5"
             />
               @endif
                
                
                <p class="font-weight-600 fs-15">
                  {{$dataaa->contents}}
                </p>
                
                @if (!empty($image[1]->text))
               <img
               src="./admin/images/{{$image[1]->text}}"
               alt="banner"
               class="img-fluid mb-5"
             />
               @endif
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="post-comment-section">
                        
        <div class="comment-section">
          <h5 class="font-weight-600">Bình luận</h5>
          @foreach ($cmt as $item)
          @if ($item->id_content == $dataaa->id)
          <div class="comment-box">
            <div class="d-flex align-items-center">
              <div class="rotate-img">
                <img
                  src="./admin/images/icon.jpg"
                  alt="banner"
                  class="img-fluid img-rounded mr-3"
                />
              </div>
              <div>
                <p class="fs-12 mb-1 line-height-xs">
                  {{$item->created_at}}
                </p>
                <p
                  class="fs-16 font-weight-600 mb-0 line-height-xs"
                >
                  @foreach ($user as $us)
                      @if ($us->id == $item->id_user)
                          {{$us->name}}
                      @endif
                  @endforeach
                </p>
              </div>
            </div>

            <p class="fs-12 mt-3">
              {{$item->contents}}
            </p>
            @if ($item->id_user==Auth::user()->id)
            <div>
              <a onclick="return confirm('bạn có muốn xóa bình luận!')" href="{{ route('deleteCmt', $item->id) }}" style="color: red;  width: 40px; text-align: center;"> Xóa</a>
              <span data-toggle="modal" data-target="#demoModal-{{$item->id}}" style="color: rgb(255, 132, 0);  width: 40px; text-align: center;">Sửa</span>
              <form action="{{ route('editCmt', ['id'=>$item->id]) }}" method="POST">
                @csrf
                <div class="modal" id="demoModal-{{$item->id}}">
                  <div class="modal-dialog">
                      <div class="modal-content">
                      <!-- Modal Header -->
                      <div class="modal-header">
                          <h4 class="modal-title">Chỉnh sửa bình luận </h4>
                          
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <div class="modal-header">
                        <input style="width: 100%;" type="text" name="contents" value="{{$item->contents}}" id="">
                      </div>
                      <!-- Modal footer -->
                      <div class="modal-footer">
                          <button type="submit"  class="btn btn-success">Cập nhật</button>
                          <button type="button" class="btn" data-dismiss="modal">Bỏ qua</button>
                      </div>
                      </div>
              </div>
              
              {{-- <div >
                <div class="modal" id="demoModal-{{$item->id}}">
                  <div class="modal-dialog">
                      <div class="modal-content">
                      <!-- Modal Header -->
                      <div class="modal-header">
                          <h4 class="modal-title">Bạn có mún xóa bình luận </h4>
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      <!-- Modal footer -->
                      <div class="modal-footer">
                          <a href="{{ route('deleteCmt', $item->id) }}"  class="btn btn-danger">dét</a>
                          <button type="button" class="btn" data-dismiss="modal">nu</button>
                      </div>
                      </div>
              </div>  --}}
            </div>
            @endif
          </div>
          
          @endif
          
          @endforeach
          
          {{-- <div class="comment-box from">
            <div class="d-flex align-items-center">
              <div class="rotate-img">
                <img
                  src="../assets/images/faces/face3.jpg"
                  alt="banner"
                  class="img-fluid img-rounded mr-3"
                />
              </div>
              <div>
                <p class="fs-12 mb-1 line-height-xs">
                  24 Jul 2020
                </p>
                <p
                  class="fs-16 font-weight-600 mb-0 line-height-xs"
                >
                  Mohsen Salehi
                </p>
              </div>
            </div>

            <p class="fs-12 mt-3">
              Praesent facilisis vulputate venenatis. In
              facilisis placerat arcu, in tempor neque aliquet
              quis. Integer lacinia in ligula eu sodales. Proin
              non lorem iaculis, dictum lorem quis, bibendum
              leo.
            </p>
          </div>
          <div class="comment-box mb-0">
            <div class="d-flex align-items-center">
              <div class="rotate-img">
                <img
                  src="../assets/images/faces/face3.jpg"
                  alt="banner"
                  class="img-fluid img-rounded mr-3"
                />
              </div>
              <div>
                <p class="fs-12 mb-1 line-height-xs">
                  24 Jul 2020
                </p>
                <p
                  class="fs-16 font-weight-600 mb-0 line-height-xs"
                >
                  Lucy Miller
                </p>
              </div>
            </div>

            <p class="fs-12 mt-3">
              Praesent facilisis vulputate venenatis. In
              facilisis placerat arcu, in tempor neque aliquet
              quis. Integer lacinia in ligula eu sodales. Proin
              non lorem iaculis, dictum lorem quis, bibendum
              leo.
            </p>
          </div> --}}
        </div>
        <div class="row">
          <div class="col-sm-12">
            <div class="card" data-aos="fade-up">
              <div class="card-body">
                <div class="aboutus-wrapper">
                  {{-- <h1 class="mt-5 text-center mb-5">
                    Bình luận
                  </h1> --}}
                  <div class="row">
                    <div class="col-lg-12 mb-5 mb-sm-2">
                      <form action="{{ route('cmt') }}" method="POST">
                        @csrf
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group">
                              <input
                              name="id_content"
                                type="hidden"
                              value="{{$dataaa->id}}"
                              />
                              <input
                              name="content"
                                type="text"
                                class="form-control"
                                id="content"
                                aria-describedby="name"
                                placeholder="Nhập bình luận của bạn tại đây *"
                              />
                            </div>
                          </div>
                        </div>
                        
                        
                        <div class="row">
                          <div class="col-sm-12">
                            <div class="form-group">
                              @auth
                              <button
                                type="submit"
                                class="btn btn-lg btn-dark font-weight-bold mt-3"
                                >Gửi bình luận</button
                              >
                                  @else
                                  <a
                                href="{{ route('register') }}"
                                class="btn btn-lg btn-dark font-weight-bold mt-3"
                                >Gửi bình luận</a
                              >
                              @endauth
                              
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
      </form>
    </div>
  </div>
@endsection