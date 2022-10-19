@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Image
                    <small>Add</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Choose File</label>
                        <input class="form-control" type="file" name="text" placeholder="Please Enter File" />
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                            <select class="form-control" name="id_noidung">
                            @foreach($content as $content)
                                <option value="{{$content->id}}">{{$content->title}}</option>
                            @endforeach
                            </select>
                    </div>
                    <button type="submit" class="btn btn-info">Image Add</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection