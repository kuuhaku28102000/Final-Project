<?php

use App\AddCvModel;
use App\JobModel;
use App\skill_job_Model;
use App\SkillModel;
use App\Student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\View;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect()->route('home');
});
Auth::routes();
Route::get('test', function () {
    $job=JobModel::all();
    // foreach($job as $i){

    // // }
    // var_dump($job);
    // var_dump((array)$job);
    // echo $job->getCV;
    // echo ($job->getCV)->fileCV;
    $skill=["PHP"];
    $out=new JobModel();
    foreach($skill as $i){
       $out=JobModel::where('skill','like','%'.$i.'%')->get(); 
  
    }
    
    foreach($out as $x){
        
        echo $x->id."-";
    }
    // foreach($xc as $r){
    //     echo $r->id;
    // }
    // var_dump($xc);
    // foreach((object)$out as $s){
    //     echo $s->id;
    // }
    // foreach($job as $j){
    //     if(in_array($j->skill,$skill)){
    //         array_push($out,$j);
    //     }
   
    // }
    // foreach($job as $i){
    //     echo $i->id;
    // }
    // foreach($job->getCompany as $s){
    //      echo $s->id;
    // }
});



Route::group(['prefix' => 'admin','middleware'=>'auth'], function () {
    Route::group(['prefix' => 'Skill'], function () {
        // admin/Skill/list
        Route::get('list', 'SkillController@getList');
        //ROute : edit
        Route::get('edit/{id}', 'SkillController@getEdit');
        Route::post('edit/{id}', 'SkillController@postEdit');
        Route::get('delete/{id}', 'SkillController@getDelete');
        //Router add new
        Route::get('add', 'SkillController@getAdd');
        Route::post('add', 'SkillController@postAdd');

        
    });
    Route::group(['prefix' => 'Place'], function () {
        Route::get('list', 'PlaceController@getList');

        Route::get('edit/{id}', 'PlaceController@getEdit');
        Route::post('edit/{id}', 'PlaceController@postEdit');
        Route::get('delete/{id}', 'PlaceController@getDelete');

        Route::get('add', 'PlaceController@getAdd');
        Route::post('add', 'PlaceController@postAdd');
    });

    Route::group(['prefix' => 'Job'], function () {
        Route::get('list', 'JobController@getList');

        Route::get('add','JobController@getAdd');
        Route::post('add', 'JobController@postAdd');

        Route::get('edit/{id}', 'JobController@getEdit');
        Route::post('edit/{id}', 'JobController@postEdit');
        Route::get('delete/{id}', 'JobController@getDelete');
        
    });
    Route::group(['prefix' => 'Student'], function () {
        Route::get('list', 'StudentController@getList');
        Route::get('edit/{id}', 'StudentController@getEdit');
        Route::post('edit/{id}', 'StudentController@postEdit');
        Route::get('delete/{id}', 'StudentController@getDelete');
     
    });
    Route::group(['prefix' => 'Company'], function () {
        Route::get('list', 'CompanyController@getList');
        Route::get('edit/{id}', 'CompanyController@getEdit');
        Route::post('edit/{id}', 'CompanyController@postEdit');
        Route::get('delete/{id}', 'CompanyController@getDelete');
        
    });
    Route::group(['prefix' => 'CV'], function () {
        Route::get('delete/{id,id_job}', 'CV@getDelete');
        Route::get('downloadCV/{path}', 'CV@getDownload');
    });
});

Route::get('/login/company', 'Auth\LoginController@showCompanyLoginForm');
Route::get('/login/student', 'Auth\LoginController@showStudentLoginForm');
Route::get('/register/company', 'Auth\RegisterController@showCompanyRegisterForm');
Route::get('/register/student', 'Auth\RegisterController@showStudentRegisterForm');

Route::get('/login/admin','Auth\LoginController@showAdminLoginForm');
// Route::get('/admin/logout', );


Route::post('/login/company', 'Auth\LoginController@companyLogin');
Route::post('/login/student', 'Auth\LoginController@studentLogin');
Route::post('/login/admin', 'Auth\LoginController@adminLogin');
Route::post('/register/company', 'Auth\RegisterController@createCompany');
Route::post('/register/student', 'Auth\RegisterController@createStudent');


Route::view('/home', 'layouts.home');

Route::group(['prefix' => 'student','middleware'=>'AdminLogin'], function () {
    
    Route::get('/','StudentController@getView');
    Route::get('/submitcv/{id}', 'StudentController@submitcv');
    Route::post('/submitcv/{id}', 'StudentController@submitcvPost');
    Route::get('/downloadCV/{path}','StudentController@dowloadCV');
    Route::get('/profile/{id}', 'StudentController@profile');
    Route::post('/edit/{id}', 'StudentController@postEdit');
    
});
Route::group(['prefix' => 'company','middleware'=>'CompanyLogin'], function () {
    Route::get('/', 'CompanyController@getView');
    Route::get('/downloadCV/{path}','CompanyController@dowloadCV');
    Route::get('/postJob','CompanyController@getViewPostJob');
    Route::post('/postJob/{id_C}','CompanyController@postJob');
    Route::get('/profile/{id}', 'CompanyController@profile');
    Route::post('/edit/{id}', 'CompanyController@postEdit');
    Route::get('/acceptcv/{id}','CompanyController@acceptCV');
});

Route::view('/admin', 'admin/layouts/index')->middleware('auth');
Route::get('checkLog/{id}',function($id){
    if(Auth::guard('student')->check()){
        return redirect('/student/profile/'.$id);
    }
    else{
        return redirect('/company/profile/'.$id);
    }
});

Route::get('/home', 'Pages@home')->name('home');
Route::get('/Job/{id}', 'Pages@Job');

Route::get('/Skill', 'Pages@Skill');
Route::get('/Place', 'Pages@Place');
Route::get('/AllCompany', 'Pages@Allcom');
Route::get('/JobFrom/{id}', 'Pages@JobFrom');
View::composer(['*'], function ($view) {
    if(Auth::guard('student')->check()){
        $view->with('student',Auth::guard('student')->user());
    }
    if(Auth::guard('company')->check()){
        $view->with('company',Auth::guard('company')->user());
    }
});
