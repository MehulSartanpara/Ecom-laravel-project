<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\category;
use App\Models\product;

class CollectionController extends Controller
{
    public function collections($slug)
    {
        $category = Category::where('slug','=', $slug)->first();
        $product = Product::where('category','=', $slug)->get();
        return view('frontend.collections', compact('category','product'));
    }
}
