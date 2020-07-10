<?php

namespace App\Http\Controllers;

use App\PlaneModel;
use Illuminate\Http\Request;

use Plane;

class PlaceController extends Controller
{
    //
    public function getList(){
        $place=PlaneModel::all();
        return view('admin.Place.list',['AllPlace'=>$place]);
    }
    public function getAdd(){
        return view('admin.Place.Addnew');
    }
    public function postAdd(Request $request){
        $this->validate($request,
        ['NameCity'=>'required|min:2|max:175|unique:place,city'],
        ['NameCity.required'=>'You need input name of city',
        'NameCity.min'=>'Your city need greater than 2',
        'NameCity.max'=>'Your city can not long than 175 character',
        'NameCity.unique'=>'Your city have been existed'
        ]);
        $place=new PlaneModel();
        $place->city=$request->NameCity;
        $place->save();
        return redirect('admin/Place/list')->with('anou',$place->city.'have been added');
    }
    public function getEdit($id){
        $city=PlaneModel::find($id);
        return view('admin.Place.Edit',['city'=>$city]);
    }
    public function postEdit(Request $request,$id){
        $city=PlaneModel::find($id);
        $this->validate($request,['NameCity'=>'required|min:2|max:175|unique:place,city'],
        ['NameCity.required'=>'You need input name of city',
        'NameCity.min'=>'Your city need greater than 2',
        'NameCity.max'=>'Your city can not long than 175 character',
        'NameCity.unique'=>'Your city have been existed'
        ]);
        $a=$city->city;
        $city->city=$request->NameCity;
        $city->save();
        return redirect('admin/Place/list')->with('anou',$city->city.' have been edited from '.$a);
    }
    public function getDelete($id){
        $place=PlaneModel::find($id);
        $place->delete();

        return redirect('admin/Place/list')->with('anou','Delete Successful');
    }
}
