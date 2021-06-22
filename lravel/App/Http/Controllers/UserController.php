<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use  App\Models\Login;

class UserController extends Controller
{
    // use SthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function frm_add_user(){

        $title_form = 'Thêm mới user';

        return view('user.add',['title_form'=>$title_form]);
        
    }

    public function insert_db(Request $req){

        $email = $req->email;
        $pw = $req->password;
        $retype_password = $req->retype_password;
        
        if (strcmp($pw,$retype_password) == 0) {
            $l = new Login();
            $l->insert_db($email,$pw);
            return back()->with('success','Luu thanh cong');
        }
        else {
            return back()->with('error','Co loi xay ra');
        }
        return view('user.information');
        // return view('user.add',['title_form'=>$title_form]);
        //echo $email;
        
        // DB::insert();
    }
    
    
}
