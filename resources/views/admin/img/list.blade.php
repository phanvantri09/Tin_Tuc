@extends('admin.layout.index')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Image
                    <small>List</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Text</th>
                        <th>Title</th>
                        <th>Delete</th>x
                        <th>Edit</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($image as $img)
                    <tr class="odd gradeX" align="center">
                        <td>{{$img['id']}}</td>
                        <td>
                            <img style="width: 200px; height: 150px" src="./admin/images/{{$img['text']}}">
                        </td>
                        
                        <td>
                            @foreach($content as $ct)
                            @if($ct->id == $img->id_noidung)
                                {{$ct->title}}
                            @endif
                            @endforeach
                        </td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/image/delete/{{$img['id']}}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/image/edit/{{$img['id']}}">Edit</a></td>
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