<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class HomepageController extends BaseController
{
    // use SthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function trangchu(){
        return view('\WebStartBStrap\trangchu');
    }
}
