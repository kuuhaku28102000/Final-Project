<div class="row">
    <div class="col-lg-12">
        <h1 class="page-header">CV
            <small>List</small>
        </h1>
    </div>
    @if (session('cv'))
        <div class="alert alert-success" role="alert">
            {{ session('cv') }}
        </div>
    @endif
    <!-- /.col-lg-12 -->
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr align="center">
                <th>ID</th>
                <th>ID Student</th>
                <th>file</th>
                
            </tr>
        </thead>
       
        <tbody>
            @foreach ($job->getCV as $cv)
            <tr class="odd gradeX" align="center">
                <td>{{ $cv->id }}</td>
                <td>{{ $cv->getStd->name }}</td>
                <td><a href="admin/CV/downloadCV/{{ $cv->fileCV }}">Dowload CV</a></td>
                
                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/CV/delete/{{ $cv->id }}/{{ $job->id }}"> Delete</a></td>
               
            </tr>
            @endforeach
        </tbody>
    </table>
</div>