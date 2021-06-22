<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\models;

class DBUsers extends Controller
{
    //
   public function index()
   {
       # code...
       $users = models::all();
       return view('DBUsersWeb.users',['users'=>$users]);
   }
   public function getDB(Request $Request) {
       $name = $Request->input('name');
       $birth = $Request->input('birth');
       $gender = intval($Request->input('gender'));
       
       $validate = $Request->validate([
           'name'=> 'required|max:50',
            'birth'=> 'required|date_format:"d/m/Y"',
       ]);
    //    $models= new models;
    //    $models->name = $name;
    //    $models->birth = $birth;
    //    $models->gender = $gender;

    //    $models->save();

    models::Create(['name'=>$name, 'birth'=>$birth, 'gender'=>$gender]);

       return view('DBUsersWeb.users');
   }
}
