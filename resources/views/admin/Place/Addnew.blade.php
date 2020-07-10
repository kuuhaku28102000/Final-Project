@extends('admin.layouts.index')
@section('content')
    <!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Place
                    <small>Add new place</small>
                </h1>
            </div>
          <!-- /.col-lg-12 -->
          @if (count($errors)>0)
            @foreach ($errors as $e)
                <div class="alert alert-danger">
                    {{ $e }} <br>
                </div>
               
            @endforeach
              
          @endif
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="admin/Place/add" method="POST">
                    @csrf
                    <div class="form-group">
                        <label>Name of Place</label>
                        <input class="form-control" name="NameCity" placeholder="Please Enter City Name" />
                    </div>
                  
                    <button type="submit" class="btn btn-default">Add new place</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                <form>
            </div>
        </div>
      <!-- /.row -->
  </div>
  <!-- /.container-fluid -->

@endsection
