@extends('admin.layouts.index')
@section('content')
     <!-- Page Content -->
     <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Edit
                        <small>{{ $city->city }}</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    @if (count($errors)>0)
                        @foreach ($errors->all() as $e)
                            <div class="alert alert-danger" role="alert">
                                {{ $e }} <br>
                            </div>
                        @endforeach
                        
                    @endif
                    <form action="admin/Place/edit/{{ $city->id }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label>City Name</label>
                            <input class="form-control" name="NameCity" placeholder="Please Enter Category Name" value="{{ $city->city }}"/>
                        </div>
                       
                        <button type="submit" class="btn btn-default">Edit</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@endsection