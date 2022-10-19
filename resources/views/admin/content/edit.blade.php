@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Content
                    <small>Edit</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="" method="POST">
                    {{csrf_field()}}
                    <input class="form-control" name="id" value="{{$content['id']}}" type="hidden">
                    <div class="form-group">
                        <label>Title</label>
                        <input class="form-control" name="title" value="{{$content['title']}}">
                    </div>
                    <div class="form-group">
                        <label>Contents</label>
                        <textarea  class="form-control ckeditor"  name="contents">{{$content['contents']}}</textarea>
                <script>
                        CKEDITOR.replace( 'contents' );
                </script>
                        
                    </div>
                    <div class="form-group">
                        <label>Category</label>
                        <select class="form-control" name="category">
                            @foreach($category as $cate)
                            <option value="{{$cate->id}}">{{$cate->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Content Edit</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection