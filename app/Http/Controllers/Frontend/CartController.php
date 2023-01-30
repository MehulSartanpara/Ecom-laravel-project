<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\product;

use Illuminate\Support\Facades\Cookie;

class CartController extends Controller
{
    public function index(){
        return view('frontend.cart');
    }
}
