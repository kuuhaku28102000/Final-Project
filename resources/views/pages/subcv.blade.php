@extends('layouts.index')
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>


input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

#label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

.ip[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

.ip[type=submit]:hover {
  background-color: #45a049;
}

.container2 {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>
<div class="container2 container">
  @if (session('er'))
    <div class="alert alert-danger">
        {{ session('er') }} 
    </div>                 
  @endif
  <form action="/student/submitcv/{{ $job->id }}" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="row">
      <div class="col-25">
        <label id="label" for="fname">Your Name</label>
      </div>
      <div class="col-75">
        <input class="ip" type="text" id="fname" name="name" value="{{ $student->name }}">
      </div>
    </div>
      <div class="row">
        <div class="col-25">
            <label id="label" for="CV">File CV</label>
          </div>
          <input type="hidden" name="job" value="{{ $job->id }}">
          <input type="hidden" name="user" value="{{ $student->id }}">
          <div class="col-75">
            <input type="file" class="form-control" name="CV" />
          </div>
    
    </div>
    <div class="break"></div>
    <div class="row">
      <input class="ip" type="submit" value="Submit">
    </div>
  </form>
</div>
</body>

