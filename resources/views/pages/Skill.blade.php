@extends('layouts.index')
@section('content')
    <!-- Page Content -->
<div class="container">
 
    <div class="row">
        @include('layouts.menu')

        <div class="col-md-9 ">
            <div class="panel panel-default">
                <div class="panel-heading" style="background-color:#337AB7; color:white;">
                    <h4><b>Find with {{ $find }}</b></h4>
                </div>
                @foreach ($job as $item)
                <div class="row-item row">
                   
                    <div class="col-md-12 border-right">
                        <div class="col-md-5" height="10px">
                            <a href="detail.html">
                                <img class="img-responsive" src="upload/logo_company/{{ $item->getCompany->logo }}"  alt="">
                            </a>
                        </div>

                        <div class="col-md-7">
                            <h3>{{ $item->title }}</h3>
                            <p style="color: green">Salary: {{ $item->salary }} $</p>
                            <p style="color:#4e4d4d ">Address: {{ $item->address }} </p>
                            <a class="btn btn-primary" href="detail.html" style="float: right;">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                            <p>Skill: {{ $item->skill }}</p>
                        </div>
                    </div>
               
                   <div class="break"></div>
                   <br>
                   
                </div>
                @endforeach
               

                <!-- Pagination -->
               
                <!-- /.row -->

            </div>
        </div> 

    </div>

</div>
<!-- end Page Content -->
@endsection