@extends('layouts.index')

@section('content')
<div class="container">



    <div class="space20"></div>


    <div class="row main-left">
        @include('layouts.menu')
        <div class="col-md-9">
            <div class="panel panel-default">            
                <div class="panel-heading" style="background-color:#337AB7; color:white;" >
                    <h2 style="margin-top:0px; margin-bottom:0px;">Jobs IT</h2>
                </div>

                <div class="panel-body">
                  
                   
                    <div class="row-item row">
                        @foreach ($com as $item)
                            <div class="col-md-12 border-right">
                                <div class="col-md-5" height="10px">
                                    <a href="detail.html">
                                        <img class="img-responsive" src="upload/logo_company/{{ $item->logo }}"  alt="">
                                    </a>
                                </div>

                                <div class="col-md-7">
                                    <h3>{{ $item->name }}</h3>
                                    <p style="color: black;">Address: {{ $item->address }} $</p>
                                    
                                    <p style="color:#000000 ">Nationnality: {{ $item->nationality }} </p>
                                    <a style="color:#000000 " href="{{ $item->website }}">Website: {{ $item->website }} </a>
                                    

                                    <a class="btn btn-primary" href="JobFrom/{{ $item->id }}" style="float: right;">View Project <span class="glyphicon glyphicon-chevron-right"></span></a>
                                </div>
                            </div>
                       
                           <div class="break"></div>
                           <br>
                        @endforeach
                    
                    </div>
                    {{ $com->links() }}
                    
             

                </div>
            </div>
        </div>
    </div>

</div>

@endsection
@section('script')

@endsection
