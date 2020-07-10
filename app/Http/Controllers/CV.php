<?php

namespace App\Http\Controllers;

use App\AddCvModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Response;

class CV extends Controller
{
    //
    public function getDelete($id,$id_Job){
        $cv=AddCvModel::find($id);
        $cv->delete();
        return redirect('admin/Job/edit/'.$id_Job)->with('cv','Delete cv Successfull');
    }
    public function getDownload($cv_path){
        $file=public_path()."/upload/CV/".$cv_path;
 
        return Response::download($file);
    }
}
