<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class admin extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $table = 'admins';

    protected $fillable = [
        'firstname',
        'lastname',
        'email',
        'username',
        'password',
        'gender',
        'role',
        'profile',
        'no_of_product',
    ];
}
