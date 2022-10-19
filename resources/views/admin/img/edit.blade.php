@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Image
                    <small>Edit</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <input class="form-control" name="id" value="{{$image['id']}}" type="hidden">
                    <div class="form-group">
                        <label>File Name</label>
                        <input class="form-control" type="file" name="text" >
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        <select class="form-control" name="id_noidung">
                            @foreach($content as $content)
                            <option value="{{$content->id}}">{{$content->title}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Image Edit</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection