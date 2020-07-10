<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Company;

class JobModel extends Model
{
    //
    protected $table="job";
    public $timestamps=true;
    public function getCompany(){
        return $this->belongsTo(Company::class,'idCompany');
    }
    public function getCV(){
        return $this->hasMany(AddCvModel::class,'idJob');
    }
}
