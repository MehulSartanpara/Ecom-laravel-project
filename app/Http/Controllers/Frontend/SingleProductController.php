<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\product;

class SingleProductController extends Controller
{
    public function index($slug){
        $product = Product::where('slug','=', $slug)->first();
        return view('frontend.single-product',compact('product'));
    }
}
