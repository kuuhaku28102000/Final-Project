@extends('admin.layouts.index')
@section('content')
       <!-- Page Content -->
       <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Job
                        <small>List</small>
                    </h1>
                </div>
                @if (session('anou'))
                        <div class="alert alert-success">
                            {{ session('anou') }}
                        </div>
                    @endif
                <!-- /.col-lg-12 -->
                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                    <thead>
                        <tr align="center">
                            <th>ID</th>
                            <th>Title</th>
                            
                            <th>address</th>
                            <th>salary</th>
                            <th>skill</th>
                            <th>Detail</th>
                            <th>Require</th>
                            <th>Benefit</th>
                            <th>Dead Line</th>
                            <th>Company</th>
                        </tr>
                    </thead>
                   
                    <tbody>
                        @foreach ($Jobs as $item)
                        <tr class="odd gradeX" align="center">
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->title }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->salary }}</td>
                            <td>{{ $item->skill }}</td>
                            <td>{{ $item->detail }}</td>
                            <td>{{ $item->Require }}</td>
                            <td>{{ $item->Benefit }}</td>
                            <td>{{ $item->DeadLine }}</td>
                            <td>{{ $item->getCompany->name }}</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/Job/delete/{{ $item->id }}"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/Job/edit/{{ $item->id }}">Edit</a></td>
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