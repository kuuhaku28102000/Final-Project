<?php

namespace App\Http\Controllers;

use App\Company as Company;
use App\JobModel;
use App\PlaneModel;
use App\SkillModel;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Job;
use Place;

class Pages extends Controller
{
    //
    /**
     * Class constructor.
     */
    public function __construct()
    {
        $skill=SkillModel::all();
        $place=PlaneModel::all();
        $job=JobModel::orderBy('id','DESC')->get();
        view()->share('skill',$skill);
        view()->share('place',$place);
        view()->share('jobs',$job);
        
        // $this->middleware('AdminLogin')->except('logout');
        // if(Auth::guard('student')->check()){
        //     view()->share('user',Auth::guard('student')->user());
        // }
    }
    public function home(){
        $job=JobModel::orderBy('id','DESC')->paginate(5);
        return view('pages.home',['jobs'=>$job]);
    }
    public function Allcom(){
        $com=Company::orderBy('id','DESC')->paginate(5);
        return view('pages.AllCom',['com'=>$com]);
    }
    public function JobFrom($id){
        $com=Company::find($id);
        $job=$com->getJob;
        return view('pages.ViewJobfrom',['jobs'=>$job]);
    }
    public function Skill(Request $request){
        
        foreach($request->S_skill as $i){
            $job=JobModel::where('skill','like','%'.$i.'%')->get();
            $find=" ".$i;
        }
        return view('pages.Skill',['job'=>$job,'find'=>trim($find)]);
        // return view('pages.Skill');
    }
    public function Place(Request $request){
        
        $job=JobModel::where('address','like','%'.$request->S_place.'%')->get();
        $find=$request->S_place;
        return view('pages.Skill',['job'=>$job,'find'=>trim($find)]);
        
    }
    public function Job($id){
        $job=JobModel::find($id);
        $job4place=JobModel::where('address','like','%'.strtoupper($job->place).'%')->take(3)->get();
        $job4skill=JobModel::where('skill','like','%'.$job->skill.'%')->take(3)->get();
        $job4Company=JobModel::where('idCompany',$job->idCompany)->take(3)->get();
        return view('pages.DetailJob',['job'=>$job,'W_Skill'=>$job4skill,'W_Place'=>$job4place,'W_Company'=>$job4Company]);
    }
    
}
