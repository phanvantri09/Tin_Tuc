@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Content
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Title</th>
                        <th>Contents</th>
                        <th>Category</th>
                        <th>Delete</th>x
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($content as $content)
                    <tr class="odd gradeX" align="center">
                        <td>{{$content['id']}}</td>
                        <td>{{$content['title']}}</td>
                        <td>{{$content['contents']}}</td>
                        <td>
                            @foreach($category as $cate)
                            @if($cate->id == $content->id_category)
                                {{$cate->name}}
                            @endif
                            @endforeach
                        </td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/content/delete/{{$content['id']}}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/content/edit/{{$content['id']}}">Edit</a></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection