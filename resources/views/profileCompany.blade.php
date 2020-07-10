@extends('layouts.index')
@section('content')
     <!-- Page Content -->
     
     <div id="page-wrapper">
        <div class="row main-left">
            <div class="col-md-3">
                @include('profile')
            </div>
            <div class="row col-md-8">
                <div class="col-lg-12">
                    <h1 class="page-header">Company Information
                        <small>Edit</small>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
                <div class="col-lg-7" style="padding-bottom:120px">
                    @if (count($errors)>0)
                        <div class="alert alert-danger">
                            @foreach ($errors->all() as $err)
                                {{ $err }} <br>
                            @endforeach
                        </div>
                    
                    @endif
     
                    <form action="company/edit/{{ $company->id }}" method="POST" enctype="multipart/form-data">
                        
                        @csrf
                        <div class="form-group">
                            <label>Company Name</label>
                            <input class="form-control" name="C_name" placeholder="Please Enter Company Order" value="{{ $company->name }}" />
                        </div>
                        
                        <div class="form-group">
                            <label>Nationality</label>
                            <input class="form-control" name="C_na" placeholder="Please Enter Company Nationality" value="{{ $company->nationality }}" />
                        </div>
                        <div class="form-group">
                            <label>Address</label>
                            <input class="form-control" name="C_address" placeholder="Please Enter Company Order" value="{{ $company->address }}" />
                        </div>
                        <div class="form-group">
                            <label>Website</label>
                            <input class="form-control" name="C_web" placeholder="Please Enter Company Website" value="{{ $company->website }}" />
                        </div>
                        <div class="form-group">
                            <label>Logo</label>
                            <p>
                                <img src="upload/logo_company/{{ $company->logo }}" width="300px" alt="">
                            </p>
                            
                            <input type="file" class="form-control" name="C_logo" />
                            
                        </div>
                      
                        <div class="form-group">
                            <label>User Name:</label>
                            <input class="form-control" name="C_Uname" placeholder="Please Enter Comopany User Name" value="{{ $company->User_name }}" />
                        </div>
                        <div class="form-group">
                            <label>Email</label>
                            <input type="email" class="form-control" name="C_email" placeholder="Please Enter Company Email" value="{{ $company->email }}"/>
                        </div>
                        <button type="submit" class="btn btn-default">Save</button>
                        <button type="reset" class="btn btn-default">Reset</button>
                    <form>
                </div>
            </div>
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@endsection