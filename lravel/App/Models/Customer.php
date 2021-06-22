<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Hash;
class Customer extends Model
{
    use HasFactory;
    protected $table = 'users_infomation';
    protected $fillable = [
        'name',
        'email',
        'password',
        'birth',
        'address',
        'gender' 
    ];
}
