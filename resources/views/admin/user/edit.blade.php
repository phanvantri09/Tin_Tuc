@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Category
                    <small>Edit</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="" method="POST">
                    {{csrf_field()}}
                    <input class="form-control" name="id" value="{{$category['id']}}" type="hidden">
                    <div class="form-group">
                        <label>Name</label>
                        <input class="form-control" name="name" value="{{$category['name']}}" placeholder="Please Enter" />
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input class="form-control" name="email" value="{{$category['email']}}" placeholder="Please Enter " />
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input class="form-control" name="password"  placeholder="Please Enter " />
                    </div>
                    <div class="form-group">
                        <label>Level</label>
                        <select name="level" id="">
                            @if ($category['level']==1)
                            <option value="{{$category['level']}}">User</option>
                                @else
                                <option value="{{$category['level']}}">Admin</option>
                            @endif
                            
                            <option value="1">user</option>
                            <option value="2">admin</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-success">Category Edit</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection