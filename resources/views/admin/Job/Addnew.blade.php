@extends('admin.layouts.index')
@section('content')
    <!-- Page Content -->

<div id="page-wrapper">
  <div class="container-fluid">
      <div class="row">
          <div class="col-lg-12">
              <h1 class="page-header">Job
                  <small>Add new</small>
              </h1>
          </div>
          <!-- /.col-lg-12 -->
         
          <div class="col-lg-7" style="padding-bottom:120px">
            @if (count($errors)>0)
                @foreach ($errors->all() as $e)
                    <div class="alert alert-danger">
                        {{ $e }} <br>
                    </div>
                @endforeach
            @endif
            @csrf
              <form action="admin/Job/add" method="POST">
                    @csrf
               
                  <div class="form-group">
                      <label>Job title</label>
                      <textarea class="form-control" name="J_title" placeholder="Please Enter Job Name" rows="3"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Skill</label>
                    <select class="form-control js-example-basic-multiple" name='J_skill[]' multiple="multiple">
                        @foreach ($list_skill as $skill)
                          <option value="{{ $skill->name }}">{{ $skill->name }}</option>
                        @endforeach
                        
                    </select>
              </div>
                  <div class="form-group">
                      <label>Address</label>
                      <textarea class="form-control" name="J_address" placeholder="Please Enter Category Keywords" rows="3"></textarea>
                  </div>
                  <div class="form-group">
                    <label>Salary</label>
                    <input class="form-control" name="J_salary" placeholder="Please Enter Category Keywords" type="number" />
                </div>
                <div class="form-group">
                    <label>Deadline</label>
                    <input class="form-control" name="J_DL" placeholder="Please Enter Category Keywords" type="date"/>
                </div>
                <br>
                <div class="form-group">
                    <label>Detail</label>
                    <textarea class="form-control" placeholder="Please Enter Detail" name="J_detail" rows="3"></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label>Require</label>
                    <textarea id="demo" class="ckeditor" placeholder="Please Enter Require" name="J_require"></textarea>
                </div>
                <br>
                <div class="form-group">
                    <label>Benefit</label>
                    <textarea id="demo" class="ckeditor" placeholder="Please Enter Benefit" name="J_benefit"></textarea>
                </div>
                <div class="form-group">
                      <label>Company</label>
                      <select class="form-control" name='J_company'>
                          @foreach ($list_company as $cpn)
                            <option value="{{ $cpn->id }}">{{ $cpn->name }}</option>
                          @endforeach
                          
                      </select>
                </div>
                  
                <br>
                  <button type="submit" class="btn btn-default">Add new Job</button>
                  <button type="reset" class="btn btn-default">Reset</button>
              <form>
          </div>
      </div>
      <!-- /.row -->
  </div>
  <!-- /.container-fluid -->
  
  
  {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script> --}}
  

@endsection
@section('script')
    
@endsection

