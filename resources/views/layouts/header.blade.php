<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <style>
    .dropbtn {
      background-color: #222222;
      color: #EAF1FF;
      padding: 16px;
     
      border: none;
      cursor: pointer;
    }
    
    
    
    .dropdown-content {
      display: none;
      position: absolute;
      background-color: #f9f9f9;
      min-width: 160px;
      box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
      z-index: 1;
    }
    
    .dropdown-content a {
      color: black;
      padding: 12px 16px;
      text-decoration: none;
      display: block;
    }
    
    .dropdown-content a:hover {background-color: #f1f1f1}
    
    .dropdown:hover .dropdown-content {
      display: block;
    }
  
  
    </style>
    </head>
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
    <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/home">TDT IT JOBS</a>
        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav">
                
                <li>
                    <a href="/AllCompany">All Company</a>
                </li>
            </ul>

            {{-- <form class="navbar-form navbar-left" role="search">
                <div class="form-group">
                  <input type="text" class="form-control" placeholder="Search">
                </div>
                <button type="submit" class="btn btn-default">Search</button>
            </form> --}}

            <ul class="nav navbar-nav pull-right">
                @if (isset($student))
                <li>     
                    <a href="checkLog/{{ $student->id }}">
                        <span class ="glyphicon glyphicon-user">{{'  '. $student->name }}</span>                   
                    </a>
                </li>
                    <li>
                    <a href="/student">
                        Manager
                    </a>
                </li>
                <li>
                   
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
        
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        
                </li>
               
                 @elseif (isset($company))
                 <li>     
                    <a href="checkLog/{{ $company->id }}">
                        <span class ="glyphicon glyphicon-user">{{'  '. $company->name }}</span>                   
                    </a>
                </li>
                    <li>
                    <a href="/company">
                        Manager
                    </a>
                </li>
                <li>
                   
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
        
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        
                </li>
                @else
                <li>
                    {{-- <a href="#">Register</a> --}}
                    <div class="dropdown">
                        <button class="dropbtn">Register</button>
                        <div class="dropdown-content">
                        <a href="/register/student">Student</a>
                        <a href="/register/company">Company</a>
                       
                        </div>
                      </div>
                </li>
                <li>
                    <div class="dropdown">
                        <button class="dropbtn">Login</button>
                        <div class="dropdown-content">
                        <a href="/student">Student</a>
                        <a href="/login/company">Company</a>
                       
                        </div>
                      </div>
                </li>
                @endif

                 {{-- <form id="logout-form" action="{{ route('login') }}" method="POST" style="display: none;">
                     @csrf
                 </form> --}}
               
                
            </ul>
        </div>


        
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</script>