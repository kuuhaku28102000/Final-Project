<?php

namespace App\Http\Controllers;

use AddCV;
use App\AddCvModel;
use App\JobModel;
use App\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Response;

class StudentController extends Controller
{
    //
    public function __construct()
    {
        
    }
    public function getView(){
        if(Auth::guard('student')->check()){
            $user=Auth::guard('student')->user();
            $user_S=Student::find($user->id);
            // view()->share('student'.$user_S);
        }
        
        return view('student',['userS'=>$user_S]);
    }
    public function submitcv($id){
        if(Auth::guard('student')->check()){
            $user=Auth::guard('student')->user();
            $user_S=Student::find($user->id);
            $job=JobModel::find($id);
           
        }
        return view('pages.subcv',['userS'=>$user_S,'job'=>$job]);
        
    }
    public function submitcvPost(Request $request,$id){
        $this->validate($request,
            ['name'=>'required',
            'CV'=>'required'],
            ['name.required'=>'You need input name',
                'CV.require'=>'You need input your CV'
            ]
            
        );
        $cv=new AddCvModel();
        $cv->idJob=$request->job;
        $cv->idStd=$request->user;
        $cv->name=$request->name;
        if($request->hasFile('CV')){
            $file=$request->file('CV');
        $end=$file->getClientOriginalExtension();
        if($end !='doc' && $end!='docx' && $end!='pdf'){
            return redirect('student/submitcv/'.$id)->with('er','File image must .doc .docx, .pdf');
        }
        $name=$file->getClientOriginalName();
        $NewName=Str::random(5)."_".$name;
        while(file_exists("upload/CV/".$NewName)){
            $NewName=Str::random(5)."_".$name;
        }
        $file->move("upload/CV",$NewName);
        $cv->fileCV=$NewName;
        }
        else{
            $cv->fileCV='cc';
        }
        $cv->save();
        return redirect('student')->with('anou',"Submit Successfull");
    }
    public function dowloadCV($cv_path){
       
        $file=public_path()."/upload/CV/".$cv_path;
 
        return Response::download($file);
    }
    public function profile($id){
        $std=Student::find($id);
        return view('profileStd',['student'=>$std]);
    }
    public function getList(){
        $std=Student::all();
        
        return view('admin.Student.list',['students'=>$std]);
    }
    public function getEdit($id){
        $st=Student::find($id);
        return view('admin.Student.Edit',['student'=>$st]);
    }
    public function postEdit(Request $request,$id){
        $std=Student::find($id);
        $this->validate($request,[
            'stdID'=>'required|min:5|max:10',
            'name'=>'min:5|max:100',
            'stdEmail'=>'required|email|max:200'
        ]);
        $std->IDstudent=$request->stdID;
        $std->name=$request->name;
        $std->phone=$request->phone;
        $std->address=$request->address;
        $std->birthday=$request->birthday;
        $std->sex=$request->sex;
        if($request->hasFile('avatar')){
            $file=$request->file('avatar');
            $end=$file->getClientOriginalExtension();
            if($end !='jpg' && $end!='png' && $end!='jpeg'){
                return redirect('admin/Student/edit/'.$std->id)->with('er','File image must .jpg , .png , .jpeg');
            }
            $name=$file->getClientOriginalName();
            $NewName=Str::random(5)."_".$name;
            while(file_exists("upload/avatar/".$NewName)){
                $NewName=Str::random(5)."_".$name;
            }
            $file->move("upload/avatar",$NewName);
            $std->avatar=$NewName;
        }
        else{
            $std->avatar="avatar.jpg";
         
        }
        $std->email=$request->stdEmail;
        $std->save();
        if(Auth::check()){
            return redirect('admin/Student/list')->with('anou','Save Successfull');
        }
        else{
            return redirect('student/profile/'.$id)->with('anou','Save Successfull');
        }
       
    }
    public function getDelete($id){
        $st=Student::find($id);
        foreach($st->getcv as $cv ){
            $cv->delete();
        }
        $st->delete();
        return redirect('admin/Student/list')->with('anou',"Delete Successfull");
    }
}
