<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class skill_job_Model extends Model
{
    //
    protected $table="job_skill";
    public function getJob(){
        return $this->belongsTo('App\JobModel','idJob','id');
    }
    public function getSkill(){
        return $this->belongsTo('App\SkillModel','idSkill','id');
    }
}
