@extends('layouts.index')
    
    @section('content')
    <div class="row main-left">
        <div class="col-md-3">
            @include('profile')
        </div>
        <div class="col-md-8">
            @if (session('anou'))
                <div class="alert alert-success" role="alert">
                    {{ session('anou') }}
                </div>
            @endif
            <div class="panel panel-default">            
                <div class="panel-heading" style="background-color:#337AB7; color:white;" >
                    <h2 style="margin-top:0px; margin-bottom:0px;">Jobs IT</h2>
                </div>

                <div class="panel-body">
       
                   
                    <div class="row-item row">
                        <a href="company/postJob" style="float: right;font-size:20px" type="button"><span><i class="fa fa-plus" aria-hidden="true"></i> New Job</span></a>
                        <div class="break"></div>
                        @foreach ($userC->getJob as $job)
                            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                <h3>{{ $job->title }}</h3>
                                <small><i class="fa fa-clock-o" aria-hidden="true">{{ $job->created_at }}</i></small>
                                @foreach ($job->getCV as $cv)
                                    <thead>
                                        <tr align="center">
                                            {{-- <th>ID</th> --}}
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>ID student</th>
                                            <th>FILE CV</th>
                                            <th>Date</th>
                                            <th>Accept</th>
                                        </tr>
                                    </thead>
                           
                                    <tbody>
                                {{-- @foreach ($FullSkill as $item) --}}
                                        <tr class="odd gradeX" align="center">
                                            
                                            <td>{{ $cv->name }}</td>
                                            <td>{{ $cv->getStd->email }}</td>
                                            <td>{{ $cv->getStd->IDstudent }}</td>
                                            <td><a href="" style="color:blue;text-decoration: initial">{{ $cv->fileCV }}</a></td>
                                            <td><i class="fa fa-clock-o" aria-hidden="true">{{ $cv->created_at }}</i></td>
                                            @if ($cv->status==1)
                                                <td>OK</td>
                                            @else
                                                <td><a href="company/acceptcv/{{ $cv->id }}" style="color: blue">Accept</a></td>
                                            @endif
                                        {{-- <td class="center"><i class="fa fa-trash-o  fa-fw delete"></i><a href="admin/Skill/delete/{{ $item->id }}"> Delete</a></td>
                                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/Skill/edit/{{ $item->id }}">Edit</a></td> --}}
                                        </tr>
                                {{-- @endforeach --}}
                                    </tbody>
                                @endforeach
                              
                         
                           
                        </table>
                       
                           <div class="break"></div>
                           <br>
                         @endforeach 
           
                       
                    </div>
                  

                </div>
            </div>
        </div>
    </div>
    @endsection