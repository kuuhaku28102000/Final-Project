<head>
    <base href="{{ asset('') }}">
    <link href="font_asset/bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="font_asset/bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="font_asset/dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font_asset/bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- DataTables CSS -->
    <link href="font_asset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.css" rel="stylesheet">

    <!-- DataTables Responsive CSS -->
    <link href="font_asset/bower_components/datatables-responsive/css/dataTables.responsive.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
</head>
<body>
    <div class="col-lg-12">
        <h1 class="page-header">New Job
            <small>create</small>
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

        <form action="company/postJob/{{ $company->id }}" method="POST">
            @csrf
       
          <div class="form-group">
              <label>Job title</label>
              <textarea class="form-control" name="J_title" placeholder="Please Enter Job Name" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label>Skill</label>
            <select id="js-example-basic-multiple"  class="form-control " name='J_skill[]' multiple="multiple">
                @foreach ($list_skill as $skill)
                  <option value="{{ $skill->name }}">{{ $skill->name }}</option>
                @endforeach
                
            </select>
      </div>
          <div class="form-group">
              <label>Address</label>
              <textarea class="form-control" name="J_address" placeholder="Please Enter Category Keywords" rows="3"></textarea>
          </div>
          <div class="form-group">
            <label>Salary</label>
            <input class="form-control" name="J_salary" placeholder="Please Enter Category Keywords" type="number" />
        </div>
        <div class="form-group">
            <label>Deadline</label>
            <input class="form-control" name="J_DL" placeholder="Please Enter Category Keywords" type="date"/>
        </div>
        <br>
        <div class="form-group">
            <label>Detail</label>
            <textarea class="form-control" placeholder="Please Enter Detail" name="J_detail" rows="3"></textarea>
        </div>
        <br>
        <div class="form-group">
            <label>Require</label>
            <textarea id="demo" class="ckeditor" placeholder="Please Enter Require" name="J_require"></textarea>
        </div>
        <br>
        <div class="form-group">
            <label>Benefit</label>
            <textarea id="demo" class="ckeditor" placeholder="Please Enter Benefit" name="J_benefit"></textarea>
        </div>
        
          
        <br>
          <button type="submit" class="btn btn-default">Add new Job</button>
          <button type="reset" class="btn btn-default">Reset</button>
      <form>
    </div>
</body>
<script src="font_asset/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="font_asset/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="font_asset/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="font_asset/dist/js/sb-admin-2.js"></script>

    <!-- DataTables JavaScript -->
    <script src="font_asset/bower_components/DataTables/media/js/jquery.dataTables.min.js"></script>
    <script src="font_asset/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>
    <script type="text/javascript" language="javascript" src="font_asset/ckeditor/ckeditor.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
    
    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
<script>
    $(document).ready(function() {
        $('#js-example-basic-multiple').select2();
 
    });
</script>