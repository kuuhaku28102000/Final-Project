<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class AddCvModel extends Model
{
    //
    protected $table="addcv";
    public $timestamps=true;
    public function getStd(){
        return $this->belongsTo(Student::class,'idStd');
    }
    public function getJob(){
        return $this->belongsTo(JobModel::class,'idJob');
    }
}
