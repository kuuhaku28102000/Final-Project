@extends('admin.layouts.index')
@section('content')
       <!-- Page Content -->
       <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Student
                        <small>List</small>
                    </h1>
                </div>
                @if (session('anou'))
                    <div class="alert alert-success" role="alert">
                        {{ session('anou') }}
                    </div>
                @endif
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Student ID</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Phone</th>
                            <th>Address</th>
                            <th>Birthday</th>
                            <th>Sex</th>
                            <th>Avatar</th>
                            <th>Delete</th>
                            <th>Edit</th>
                        </tr>
                    </thead>
                   
                    <tbody>
                        @foreach ($students as $s)
                        <tr class="odd gradeX" align="center">
                            <td>{{ $s->id }}</td>
                            <td>{{ $s->IDstudent }}</td>
                            <td>{{ $s->name }}</td>
                            <td>{{ $s->email }}</td>
                            <td>{{ $s->phone }}</td>
                            <td>{{ $s->address }}</td>
                            <td>{{ $s->birthday }}</td>
                            <td>{{ $s->sex }}</td>
                            <td><img src="upload/avatar/{{ $s->avatar }}" style="width:100px;height:70px" alt="" width=""></td>
                            
                            
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/Student/delete/{{ $s->id }}"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/Student/edit/{{ $s->id }}">Edit</a></td>
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