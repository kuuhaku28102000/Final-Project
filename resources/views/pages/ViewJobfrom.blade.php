@extends('layouts.index')

@section('content')
<div class="container">

    <!-- slider -->
    {{-- <div class="row carousel-holder">
        <div class="col-md-12">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="item active">
                        <img class="slide-image" src="image/800x300.png" alt="">
                    </div>
                    <div class="item">
                        <img class="slide-image" src="image/800x300.png" alt="">
                    </div>
                    <div class="item">
                        <img class="slide-image" src="image/800x300.png" alt="">
                    </div>
                </div>
                <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                </a>
            </div>
        </div>
    </div> --}}
    <!-- end slide -->

    <div class="space20"></div>


    <div class="row main-left">
        @include('layouts.menu')
        <div class="col-md-9">
            <div class="panel panel-default">            
                <div class="panel-heading" style="background-color:#337AB7; color:white;" >
                    <h2 style="margin-top:0px; margin-bottom:0px;">Jobs IT</h2>
                </div>

                <div class="panel-body">
                    <!-- item -->
                   
                    <div class="row-item row">
                        {{-- <h3>
                            <a href="category.html"></a> |
                            {{-- <br>
                            @php
                                // $arr=explode("/",filter_var(trim($item->skill,"/")));
                                
                            @endphp 	
                            @foreach ($arr as $a)
                                <small><a href="category.html"><i>{{ $a }}</i></a> / </small>
                            @endforeach --}}
                           
                        
                        {{-- </h3> --}}
                        @foreach ($jobs as $item)
                            <div class="col-md-12 border-right">
                                <div class="col-md-5" height="10px">
                                    <a href="detail.html">
                                        <img class="img-responsive" src="upload/logo_company/{{ $item->getCompany->logo }}"  alt="">
                                    </a>
                                </div>

                                <div class="col-md-7">
                                    <h3>{{ $item->title }}</h3>
                                    <p style="color: green">Salary: {{ $item->salary }} $</p>
                                    <p style="color:#000000 ">Address: {{ $item->address }} </p>
                                    <p style="color:#000000 ">Skill: {{ $item->skill }} </p>
                                    <p style="color:#000000 ">Detail: {{ substr($item->detail,0,300).'...' }} </p>
                                    <p style="color:#000000 ">Company: {{ $item->getCompany->name }} </p>

                                    <a class="btn btn-primary" href="Job/{{ $item->id }}" style="float: right;">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                                </div>
                            </div>
                       
                           <div class="break"></div>
                           <br>
                        @endforeach
                        {{-- <div class="col-md-4">
                            <a href="detail.html">
                                <h4>
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </h4>
                            </a>

                            <a href="detail.html">
                                <h4>
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </h4>
                            </a>

                            <a href="detail.html">
                                <h4>
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </h4>
                            </a>

                            <a href="detail.html">
                                <h4>
                                    <span class="glyphicon glyphicon-list-alt"></span>
                                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                                </h4>
                            </a>
                        </div> --}}
                       
                        
                       
                    </div>
                  
                    
                    <!-- end item -->
                    <!-- item -->
                   
                    <!-- end item -->

                </div>
            </div>
        </div>
    </div>
    <!-- /.row -->
</div>

@endsection
@section('script')

@endsection
