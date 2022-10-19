@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Tổng quan
                </h1>
            </div>
            <div class="container">
                <div class="row">
                  <div class="col-sm col-md-3 bg-success ">
                    <h3>Thể loại</h3>
                    <b>Tổng:</b>{{$ca}}
                    <b></b>
                    
                  </div>
                  <div class="col-sm col-md-3 bg-info">
                   
                   <h3>Tin</h3>
                   <b>Tổng:</b>{{$co}}
                  </div>
                  <div class="col-sm col-md-3 bg-danger">
                    <h3>Người dùng</h3>
                    <b>Tổng:</b>{{$us}}
                  </div>
                  <div class="col-sm col-md-3 bg-warning">
                    <h3>Bình luận</h3>
                    <b>Tổng:</b>{{$cm}}
                  </div>
                </div>
              </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection