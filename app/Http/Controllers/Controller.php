<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Support\Facades\Auth;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    /**
     * Class constructor.
     */
    public function __construct()
    {
        $this->checkLogin();
    }
    public function checkLogin(){
        if(Auth::guard('student')->check()){
            view()->share('user',Auth::guard('student')->user());
        }
    }
}
