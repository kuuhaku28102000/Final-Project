@extends('admin.layouts.index')
@section('content')
       <!-- Page Content -->
       <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Company
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
                            <th>Name</th>
                            <th>Nationality</th>
                            <th>Website</th>
                            <th>Logo</th>
                            <th>User Name</th>
                            <th>Email</th>
                            
                        </tr>
                    </thead>
                   
                    <tbody>
                        @foreach ($companies as $item)
                        <tr class="odd gradeX" align="center">
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->nationality }}</td>
                            <td><a href="{{ $item->website }}">Link</a></td>
                            <td><img src="upload/logo_company/{{ $item->logo }}" style="width:100px;height:70px" alt="" width=""></td>
                            <td>{{ $item->User_name }}</td>
                            <td>{{ $item->email }}</td>
                            <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/Company/delete/{{ $item->id }}"> Delete</a></td>
                            <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/Company/edit/{{ $item->id }}">Edit</a></td>
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