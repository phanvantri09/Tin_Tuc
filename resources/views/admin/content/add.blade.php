@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Content
                    <small>Add</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="" method="POST">
                    {{csrf_field()}}
                    <div class="form-group">
                        <label>Title</label>
                        <input class="form-control" name="title" placeholder="Please Enter Title" />
                    </div>
                    <div class="form-group">
                        <label>Contents</label>
                        <textarea  class="form-control ckeditor"  name="contents"></textarea>
                <script>
                        CKEDITOR.replace( 'contents' );
                </script>
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                            <select class="form-control" name="id_category">
                            @foreach($category as $cate)
                                <option value="{{$cate->id}}">{{$cate->name}}</option>
                            @endforeach
                            </select>
                    </div>
                    <button type="submit" class="btn btn-info">Content Add</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection