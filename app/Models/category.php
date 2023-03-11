<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class category extends Model
{
    use HasFactory;
    protected $table = 'categorys';

    protected $fillable = [
        'category_name',
        'no_of_product',
        'username',
        'slug',
    ];
}
