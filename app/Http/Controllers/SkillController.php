<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SkillModel;
use Illuminate\Support\Facades\Request as FacadesRequest;
use Skill;
use Symfony\Component\HttpFoundation\Request as HttpFoundationRequest;

class SkillController extends Controller
{
    //
    public function getList(){
        $Skill=SkillModel::all();
        return view('admin.Skill.List',['FullSkill'=>$Skill]);
    }
    public function getEdit($id){
        $skill=SkillModel::find($id);
        return view('admin.Skill.Edit',['skill'=>$skill]);
    }
    public function postEdit(HttpFoundationRequest $request,$id){
        $skill=SkillModel::find($id);
        $this->validate($request,[
            'nameSkill'=>'required|min:1|max:100|unique:skill,name'
        ],[
            'nameSkill.require'=>'You need input Skill name',
            'nameSkill.max'=>'Skill is not long too',
            'nameSkill.unique'=>'This Skill has been exist',
        ]);
      
        $skill->name=$request->nameSkill;
        $skill->save();
        return redirect('admin/Skill/edit/'.$id)->with('anou','Successfull');
    }
    public function getAdd(){
        return view('admin.Skill.Addnew');
    }
    public function postAdd(HttpFoundationRequest $request){
        $this->validate($request,[
            'name'=>'required|min:1|max:100|unique:skill,name'
        ],[
            'name.required'=>'You need input Skill name',
            'name.max'=>'Skill is not long too',
            'name.unique'=>'This Skill has been exist',
        ]);
        $skill=new SkillModel();
        $skill->name=$request->name;
        $skill->save();
        return redirect('admin/Skill/add')->with('anou','Successfull ');

    }
    public function getDelete($id){
        $skill=SkillModel::find($id);
        $skill->delete();

        return redirect('admin/Skill/list')->with('anou','Delete Successful');
    }
}
