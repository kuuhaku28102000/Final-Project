@extends('layouts.index')
@section('css')
    
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
    .button {
      border-radius: 4px;
      background-color: #f4511e;
      border: none;
      color: #FFFFFF;
      text-align: center;
      font-size: 28px;
      padding: 20px;
      width: 200px;
      transition: all 0.5s;
      cursor: pointer;
      margin: 5px;
    }
    
    .button span {
      cursor: pointer;
      display: inline-block;
      position: relative;
      transition: 0.5s;
    }
    
    .button span:after {
      content: '\00bb';
      position: absolute;
      opacity: 0;
      top: 0;
      right: -20px;
      transition: 0.5s;
    }
    
    .button:hover span {
      padding-right: 25px;
    }
    
    .button:hover span:after {
      opacity: 1;
      right: 0;
    }
    </style>
    </head>
    
    
@endsection
@section('content')
<div class="container">
    <div class="row">
       
        <div class="col-lg-12 border-right">
            <div class="col-lg-5" height="10px">
                <a href="JobFrom/{{ $job->getCompany->id }}">
                    <img class="img-responsive" src="upload/logo_company/{{ $job->getCompany->logo }}" alt="">
                </a>
            </div>
            <div class="col-lg-7">
                <h1>{{ $job->title }} </h1>
                <h2>Company Name: {{ $job->getCompany->name }} </h2>
                <h3>
                    <p style="color: green">Salary:{{ $job->salary }} $</p>
                </h3>
                <h3>
                    <p style="color:#000000 ">Address: {{ $job->address }} </p>
                </h3>
                <h3>
                    <p style="color:#000000 ">Skill: {{ $job->skill }}</p>
                </h3>
                <a class="btn btn-primary" href="/student/submitcv/{{ $job->id }}" style="float: right;background-color:red" >Apply Now <span class="glyphicon glyphicon-chevron-right"></span></a>
            </div>
           
        </div>
        <div class="break"></div>
        
        
        <!-- Blog Post Content Column -->
        <div class="col-lg-9">

            <!-- Blog Post -->

            <!-- Title -->
            <h2>Detail</h2>

            <!-- Author -->

            <!-- Post Content -->
            <p class="lead">{{ $job->detail }}</p>


            <hr>
            <h2>Require</h2>
            <p class="lead">{!! $job->Require !!}</p>
            <hr>
            <h2>Benefit</h2>
            <p class="lead">{!! $job->Benefit !!}</p>
            <div class="break"></div>
            <br>
            <a class="button" href="/student/submitcv/{{ $job->id }}" style="background-color:red"><span>Apply Now </span></a>
            <hr>
            <br>
            <h2 style="color:black">More Job With Same Company</h2>
            <br>
            @foreach ($W_Company as $job_C)
            <div class="media">
                <a class="pull-left" href="JobFrom/{{ $job_C->getCompany->id }}">
                    <img class="media-object" src="upload/logo_company/de.png" width="50px" height="50px" alt="">
                </a>
                <div class="media-body">
                    <h4 class="media-heading"><a href="Job/{{ $job_C->id }}"  style="color:blue">{{ $job_C->title }}</a>
                        
                    </h4>
                   {{ substr($job_C->detail,0,100)."..." }}
                </div>
            </div>
            <div class="break"></div>
            @endforeach

        </div>

        <!-- Blog Sidebar Widgets Column -->
        <div class="col-md-3">

            <div class="panel panel-default">
                <div class="panel-heading"><b>Same Job with Skill</b></div>
                <div class="panel-body">
                    @foreach ($W_Skill as $job_S)
                          <!-- item -->
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-5">
                            <a href="JobFrom/{{ $job_C->getCompany->id }}">
                                <img class="img-responsive" src="upload/logo_company/{{ $job_S->getCompany->logo }}" alt="">
                            </a>
                        </div>
                        <div class="col-md-7">
                            <a href="Job/{{ $job_S->id }}"><b>{{ $job_S->title }}</b></a>
                        </div>
                        <p>{{ substr($job_S->detail,0,50)." ..." }}</p>
                        <div class="break"></div>
                    </div>
                    <!-- end item -->
                    @endforeach
   
                </div>
            </div>

            <div class="panel panel-default">
                <div class="panel-heading"><b>Same Job with Place</b></div>
                <div class="panel-body">
                    @foreach ($W_Place as $job_P)
                        <!-- item -->
                    <div class="row" style="margin-top: 10px;">
                        <div class="col-md-5">
                            <a href="JobFrom/{{ $job_P->getCompany->id }}">
                                <img class="img-responsive" src="upload/logo_company/{{ $job_P->logo }}" alt="">
                            </a>
                        </div>
                        <div class="col-md-7">
                            <a href="Job/{{ $job_S->id }}"><b>{{ $job_P->title }}</b></a>
                        </div>
                        <p>{{ substr($job_P->detail,0,50)." ..." }}</p>
                        <div class="break"></div>
                    </div>
                    <!-- end item -->
                    @endforeach

                </div>
            </div>

        </div>
        
    </div>
    <!-- /.row -->
    
</div>
@endsection