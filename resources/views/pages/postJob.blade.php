@extends('layouts.index')
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
@section('content')
     <!-- Page Content -->
     
     <div id="page-wrapper">
        <div class="row">
            
            
            @include('pages.formpost');
            <!-- /.row -->
        </div>
        <!-- /.container-fluid -->
    </div>
@endsection
