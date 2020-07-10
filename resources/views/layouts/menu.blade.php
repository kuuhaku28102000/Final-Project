<head>
    @section('css')
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
  
    
@endsection
</head>
<div class="col-md-3 ">
    <ul class="list-group" id="menu">
        <li href="#" class="list-group-item menu1 active">
            Menu
        </li>

        <li href="#" class="list-group-item menu1">
           Skill
        </li>
        <ul>
            
            <li class="list-group-item">
                <form action="/Skill/" method="GET">
                    @csrf
                    <div class="form-group">
                        <label>Skill</label>
                        <select id="js-example-basic-multiple" class="form-control" name='S_skill[]' multiple="multiple">
                            @foreach ($skill as $skill)
                                <option value="{{ $skill->name }}">{{ $skill->name }}</option>
                            @endforeach
                        
                            </select>
                    </div>
                
                    <input type="submit" value="Find" class="btn btn-default">
                </form>
            </li>
           
        </ul>

        <li href="#" class="list-group-item menu1">
            <a href="#">Place</a>
        </li>
        <ul>
            <li class="list-group-item">
                <form action="/Place/" method="GET">
                    @csrf
                    <div class="form-group">
                        <label>Choose Place</label>
                        <select  class="form-control" name='S_place'>
                            @foreach ($place as $p)
                                <option value="{{ $p->city }}">{{ $p->city }}</option>
                            @endforeach
                        
                        </select>
                    </div>
                
                    <input type="submit" value="Find" class="btn btn-default">
                </form>
            </li>
        </ul>


    </ul>
</div>
@section('script')
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
@endsection
