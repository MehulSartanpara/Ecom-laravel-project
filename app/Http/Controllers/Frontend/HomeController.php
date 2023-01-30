<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\product;

class HomeController extends Controller
{
    public function index(){
        $product = Product::orderBy('id', 'desc')->get();
        return view('frontend.index',compact('product'));
    }
}
