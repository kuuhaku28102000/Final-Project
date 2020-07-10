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
                    <h1 class="page-header">Student Information
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
     
                    <form action="student/edit/{{ $student->id }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label>Student ID:</label>
                            <input class="form-control" name="stdID" placeholder="Please Enter Category Name" value="{{ $student->IDstudent }}"/>
                        </div>
                        <div class="form-group">
                            <label>Name:</label>
                            <input class="form-control" name="name" placeholder="Please Enter Category Name" value="{{ $student->name }}"/>
                        </div>
                        <div class="form-group">
                            <label>Phone:</label>
                            <input class="form-control" name="phone" placeholder="Please Enter Category Name" value="{{ $student->phone }}"/>
                        </div>
                        <div class="form-group">
                            <label>Address:</label>
                            <input class="form-control" name="address" placeholder="Please Enter Category Name" value="{{ $student->address }}"/>
                        </div>
                        <div class="form-group">
                            <label>Birth Day</label>
                            <input class="form-control" name="birthday" placeholder="Please Enter Category Keywords" type="date" >
                        </div>
                        <div class="form-group">
                            <label>Sex:</label>
                            <select name="sex" class="form-control">
                                <option value="Male">Male</option>
                                <option value="FeMale">FeMale</option>

                            </select>
                        </div>
                        <div class="form-group">
                            <label>Avatar:</label>
                            <input class="form-control" name="avatar" type="file"/>
                        </div>
                        <div class="form-group">
                            <label>Email:</label>
                            <input class="form-control" name="stdEmail" placeholder="Please Enter Category Name" type="email" value="{{ $student->email }}"/>
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