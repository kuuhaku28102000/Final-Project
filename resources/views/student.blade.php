
@extends('layouts.index')

    @section('content')
    <div class="container">
        @if (session('anou'))
        <div class="alert alert-success">
            {{ session('anou') }}
        </div>
    @endif
        <div class="row main-left">
            <div class="col-md-3">
                @include('profile')
            </div>
            <div class="col-md-8">
                <div class="panel panel-default">            
                    <div class="panel-heading" style="background-color:#337AB7; color:white;" >
                        <h2 style="margin-top:0px; margin-bottom:0px;">Jobs IT</h2>
                    </div>
    
                    <div class="panel-body">
           
                       
                        <div class="row-item row">
     
                            @foreach ($userS->getCV as $cv)
                                <div class="col-md-12 border-right">
                                    <div class="col-md-3">
                                        <a href="JobFrom/{{ $cv->getJob->getCompany->id }}">
                                            <img  src="upload/logo_company/{{ $cv->getJob->getCompany->logo }}" height="100px" width="100px" alt="">
                                        </a>
                                    </div>
    
                                    <div class="col-md-7">
                                        <h3>{{ $cv->getJob->title }}</h3>
                                        <p>to Company: {{ $cv->getJob->getCompany->name }}</p>
                                        <i class="fa fa-clock-o" aria-hidden="true">{{ $cv->created_at }}</i>
                                        <br>
                                        <p style="font-size: 16">Status: 
                                            @if ($cv->status !=0)
                                                <span style="color: green" style="font-size: 16">Accept</span>
                                            @else
                                                <span style="font-size: 16">Wating...</span>
                                            @endif
                                        </p>
                                        <br>
                                        <br>
                                        <a href="student/downloadCV/{{ $cv->fileCV }}">Download CV</a>
                                        
                                    </div>
                                </div>
                           
                               <div class="break"></div>
                               <br>
                             @endforeach 
               
                           
                        </div>
                      
    
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endsection