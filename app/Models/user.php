<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class user extends Model
{
    use HasFactory;
    protected $table = 'users';

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'username',
        'address',
        'city',
        'pincode',
        'gender',
        'number',
        'image',
        'password',
        'confirmpassword',
    ];
}
