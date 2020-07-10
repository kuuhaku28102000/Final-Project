<?php

namespace App\Http\Controllers;

use App\JobModel;
use App\Company;
use App\SkillModel;
use Illuminate\Http\Request;

class JobController extends Controller
{
    //
    public function getList(){
        $all_Jobs=JobModel::orderBy('id','DESC')->get();
        return view('admin.Job.list',['Jobs'=>$all_Jobs]);
    }
    public function getAdd(){
        $cmp= Company::all();
        $skill=SkillModel::all();
        return view('admin.Job.Addnew',['list_company'=>$cmp,'list_skill'=>$skill]);
    }
    public function postAdd(Request $request){
        $this->validate($request,
            ['J_title'=>'required|min:10|max:2000',
            'J_address'=>'required|min:10|max:2000',
            'J_salary'=>'required',
            'J_skill'=>'required',
            'J_DL'=>'required',
            'J_detail'=>'required|min:10|max:5000',
            'J_require'=>'required|min:10|max:5000',
            'J_benefit'=>'required|min:10|max:2000',
            'J_company'=>'required'
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
        $job->idCompany=$request->J_company;
        $arr_skill="";
        foreach($request->J_skill as $skill){
            $arr_skill.=$skill." ";
        }
        $job->skill=trim($arr_skill);
        $job->save();
        return redirect('admin/Job/list')->with('anou','Insert Successful');
    }
    public function getEdit($id){
        $cmp= Company::all();
        $skill=SkillModel::all();
        $job=JobModel::find($id);
        return view('admin.Job.Edit',['list_company'=>$cmp,'list_skill'=>$skill,'job'=>$job]);
    }
    public function postEdit(Request $request,$id){
        $job=JobModel::find($id);
        $this->validate($request,
            ['J_title'=>'required|min:10|max:2000',
            'J_address'=>'required|min:10|max:2000',
            'J_salary'=>'required',
            'J_skill'=>'required',
            'J_DL'=>'required',
            'J_detail'=>'required|min:10|max:5000',
            'J_require'=>'required|min:10|max:5000',
            'J_benefit'=>'required|min:10|max:2000',
            'J_company'=>'required'
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
            'J_company.required'=>'You need input Company',
            'J_company.min'=>'Company is so shorted',
            'J_company.max'=>'Company is not long too',
        ]);
        $job->title=$request->J_title;
        $job->address= $request->J_address ;
        $job->salary=$request->J_salary;
        $job->DeadLine=$request->J_DL;
        $job->detail=$request->J_detail;
        $job->Require=$request->J_require;
        $job->Benefit=$request->J_benefit;
        $job->idCompany=$request->J_company;
        $arr_skill="";
        foreach($request->J_skill as $skill){
            
            $arr_skill.=$skill." ";
            // 
        }
        $job->skill=trim($arr_skill);
        $job->save();
        return redirect('admin/Job/list')->with('anou','Save Successful');
    }
    public function getDelete($id){
        $job=JobModel::find($id);
        $job->delete();

        return redirect('admin/Job/list')->with('anou','Delete Successful');
    }
}
