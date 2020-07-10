<?php

namespace App\Http\Controllers;

use App\AddCvModel;
use Illuminate\Http\Request;
use App\Company;
use App\JobModel;
use App\SkillModel;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Response;
use Illuminate\Support\Str;

class CompanyController extends Controller
{
    //
    public function acceptCV($id){
        $cv=AddCvModel::find($id);
        $cv->status=true;
        $cv->save();
        return redirect('company')->with('anou','Accept Successful');
    }
    public function getList(){
        $companies=Company::all();
        return view('admin.Company.list',['companies'=>$companies]);
    }
    public function getEdit($id){
        $company=Company::find($id);
        return view('admin.Company.Edit',['company'=>$company]);
    }
    public function dowloadCV($cv_path){
       
        $file=public_path()."/upload/CV/".$cv_path;
 
        return Response::download($file);
    }
    public function postEdit(Request $request,$id){
        $company=Company::find($id);
        $this->validate($request,[
            'C_name'=>'required|min:1|max:30',
            'C_na'=>'required|min:1|max:30',
            'C_web'=>'required|min:10|max:200',
            
            'C_Uname'=>'required|min:10|max:35',
            'C_email'=>'required|min:10|max:50|email',
        ]);
        $company->name=$request->C_name;
        $company->nationality=$request->C_na;
        $company->website=$request->C_web;
        $company->User_name=$request->C_Uname;
        $company->email=$request->C_email;
        $company->address=$request->C_address;
        if($request->hasFile('C_logo')){
            $file=$request->file('C_logo');
            $end=$file->getClientOriginalExtension();
            if($end !='jpg' && $end!='png' && $end!='jpeg'){
                return redirect('admin/Company/edit/'.$company->id)->with('er','File image must .jpg , .png , .jpeg');
            }
            $name=$file->getClientOriginalName();
            $NewName=Str::random(5)."_".$name;
            while(file_exists("upload/logo_company/".$NewName)){
                $NewName=Str::random(5)."_".$name;
            }
            $file->move("upload/logo_company",$NewName);
            $company->logo=$NewName;
        }
        else{
            $company->logo="de.png";
         
        }
        $company->save();
        if(Auth::check()){
            return redirect('admin/Student/list')->with('anou','Save Successfull');
        }
        else{
            return redirect('company/profile/'.$id)->with('anou','Save Successfull');
        }
    }
    public function profile($id){
        $com=Company::find($id);
        return view('profileCompany',['company'=>$com]);
    }
    public function getDelete($id){
        $c=Company::find($id);
        foreach($c->getJob as $cv){
            $cv->delete();
        }
        $c->delete();
        return redirect('admin/Company/list')->with('anou',"Delete Successfull");
    }
    public function getView(){
        if(Auth::guard('company')->check()){
            $user=Auth::guard('company')->user();
            $user_C=Company::find($user->id);
            // view()->share('student'.$user_S);
        }
        
        return view('company',['userC'=>$user_C]);
    }
    public function getViewPostJob(){
        
        $skill=SkillModel::all();
        return view('pages/postJob',['list_skill'=>$skill]);
    }
    public function postJob(Request $request,$id_C){
        $this->validate($request,
        ['J_title'=>'required|min:10|max:2000',
        'J_address'=>'required|min:10|max:2000',
        'J_salary'=>'required',
        'J_skill'=>'required',
        'J_DL'=>'required',
        'J_detail'=>'required|min:10|max:5000',
        'J_require'=>'required|min:10|max:5000',
        'J_benefit'=>'required|min:10|max:2000',
       
        ],
        [
        'J_title.required'=>'You need input Title',
        'J_title.max'=>'Title is not long too',
        'J_title.min'=>'Title is so shorted',
        'J_address.required'=>'You need input Address',
        'J_address.max'=>'Address is not long too',
        'J_address.min'=>'Address is so shorted',
        'J_salary.required'=>'You need input Salary',
        'J_DL.required'=>'You need input Deadline',
        'J_skill.required'=>'You need input Skill',
        'J_detail.required'=>'You need input Detail',
        'J_detail.min'=>'Detail is so shorted',
        'J_detail.max'=>'Detail is not long too',
        'J_require.required'=>'You need input Require',
        'J_require.min'=>'Require is so shorted',
        'J_require.max'=>'Require is not long too',
        'J_benefit.required'=>'You need input Benefit',
        'J_benefit.min'=>'Benefit is so shorted',
        'J_benefit.max'=>'Benefit is not long too',
       
        ]);
    $job=new JobModel();
    $job->title=$request->J_title;
    $job->address=$request->J_address;
    $job->salary=$request->J_salary;
    $job->DeadLine=$request->J_DL;
    $job->detail=$request->J_detail;
    $job->Require=$request->J_require;
    $job->Benefit=$request->J_benefit;
    $job->idCompany=$id_C;
    $arr_skill="";
    foreach($request->J_skill as $skill){
        $arr_skill.=$skill." ";
    }
    $job->skill=trim($arr_skill);
    $job->save();
    return redirect('company')->with('anou','Insert Successful');
    }
    
    
}
