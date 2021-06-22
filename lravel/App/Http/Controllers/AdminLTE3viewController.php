<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class AdminLTE3viewController extends BaseController
{
    // use SthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function started(){
        return view('AdminLTE3view.master');
        
    }
    public function Dashboard(){
        return view('AdminLTE3view.Dashboard');
    }
    public function DashboardV2(){
        return view('AdminLTE3view.DashboardV2');
    }
    public function DashboardV3(){
        return view('AdminLTE3view.DashboardV3');
    }
    
}
