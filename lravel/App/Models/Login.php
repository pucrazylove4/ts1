<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;


class Login {
    
    public function insert_db($email,$pw) {
        $password = Hash::make($pw);
        $data = array('email'=>$email, 'password'=>$password);
        // $sql = "";

        DB::table('login')->insert($data);
    }
}
