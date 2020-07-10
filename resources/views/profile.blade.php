<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
    
    .profile>.card {
      box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
      max-width: 300px;
      margin: auto;
      text-align: center;
      font-family: arial;
    }
    
    .profile>.title {
      color: grey;
      font-size: 18px;
    }
    
    .profile>button {
      border: none;
      outline: 0;
      display: inline-block;
      padding: 8px;
      color: white;
      background-color: #000;
      text-align: center;
      cursor: pointer;
      width: 100%;
      font-size: 18px;
    }
    
    .profile>a {
      text-decoration: none;
      font-size: 22px;
      color: black;
    }
    
    .profile>button:hover, a:hover {
      opacity: 0.7;
    }
    </style>
</head>
<body>
  <div class="profile">
    <h3 style="text-align:center">Profile Card</h3>
      @if (isset($student))
      <div class="card">
        <img src="upload/avatar/{{ $student->avatar }}" alt="John" style="width:100%">
        <h1>{{ $student->name }}</h1>
        <p class="title">Student ID: {{ $student->IDstudent }}</p>
        <p>Ton Duc Thang University</p>
        <p class="title">Phone: {{ $student->phone }}</p>
        <p class="title"><Address>Address: {{ $student->address }}</Address></p>
        <p class="title">Email: {{ $student->email }}</p>
        <p class="title">Birth day: {{ $student->birthday }}</p>
        <p class="title">Sex: {{ $student->sex }}</p>

      </div>
      @else
      <div class="card">
        <img src="upload/logo_company/{{ $company->logo }}" alt="" style="width:100%">
        <h1>{{ $company->name }}</h1>
        <p class="title">{{ $company->email }}</p>
        <p class="title">{{ $company->User_name }}</p>
        <p class="title">{{ $company->nationality }}</p>
        <br>
      

        {{-- <div style="margin: 24px 0;">
          <a href="{{ $company->nationality }}"><i class="fa fa-dribbble"></i></a> 
          
        </div> --}}
       <a type="button" href="{{ $company->website }}">Contact</a>
      </div>
      @endif
      
  </div>
      
      
</body>