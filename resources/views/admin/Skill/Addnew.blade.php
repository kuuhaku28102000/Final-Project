@extends('admin.layouts.index')
@section('content')
    <!-- Page Content -->
<div id="page-wrapper">
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
              <h1 class="page-header">Skill
                  <small>Add</small>
              </h1>
          </div>
          <!-- /.col-lg-12 -->
          <div class="col-lg-7" style="padding-bottom:120px">
            @if (count($errors)>0)
                <div class="aler alert-danger">
                    @foreach ($errors->all() as $err)
                        {{ $err }}<br>
                    @endforeach
                </div>
            @endif
            @if(session('anou'))
                <div class="alert alert-success">
                    {{ session('anou') }}
                </div>
                
            @endif
              <form action="admin/Skill/add" method="POST">
                  @csrf
                  <div class="form-group">
                      <label>Skill Name</label>
                      <input class="form-control" name="name" placeholder="Please Enter Skill Name" />
                  </div>
                
                  <button type="submit" class="btn btn-default">Add New Skill</button>
                  <button type="reset" class="btn btn-default">Reset</button>
                </form>
          </div>
      </div>
      <!-- /.row -->
  </div>
  <!-- /.container-fluid -->

@endsection
