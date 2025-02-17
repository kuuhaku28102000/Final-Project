@extends('admin.layouts.index')
@section('content')
       <!-- Page Content -->
       <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Place
                        <small>List</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                @if (session('anou'))
                <div class="alert alert-success">
                    {{ session('anou') }}
                </div>
            @endif
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Name</th>
                           
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                   
                    <tbody>
                        @foreach ($AllPlace as $item)
                        <tr class="odd gradeX" align="center">
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->city }}</td>
                            
                            
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/Place/delete/{{ $item->id }}"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/Place/edit/{{ $item->id }}">Edit</a></td>
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