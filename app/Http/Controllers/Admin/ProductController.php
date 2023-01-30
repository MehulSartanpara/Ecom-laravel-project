<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\product;
use App\Models\category;

use App\Models\admin;

use Illuminate\Support\Facades\File;

use Illuminate\Support\Str;

use Session;

class ProductController extends Controller
{
    public function index(){
        $product = Product::orderBy('id', 'desc')->paginate(5);
        return view('admin.products',compact('product'));
    }
    public function create(){
        $category = Category::all();
        return view('admin.add-product',compact('category'));
    }

    public function store(Request $request){
        $request->validate([
            'title' => 'required',
            'sku' => 'required',
            'description' => 'required',
            'category' => 'required',
            'compare_price' => 'required',
            'selling_price' => 'required',
            'quantity' => 'required',
            'tag' => 'required',
            'image' => 'required',
        ]);
        $product = new Product;
        $product->title = $request->input('title');
        $product->sku = $request->input('sku');
        $product->description = $request->input('description');
        $product->category = $request->input('category');
        $product->compare_price = $request->input('compare_price');
        $product->selling_price = $request->input('selling_price');
        $product->quantity = $request->input('quantity');
        $product->tag = $request->input('tag');
        $product->admin = $request->input('admin');
        $product->slug = Str::slug($request->input('title').'-'.time());

        // $adminName = $request->input('admin');

        // $CurrentProduct = Admin::select('no_of_product')->where('username','=', $adminName)->first();

        // Admin::insert('no_of_product')->where('username','=', $adminName)->first();

        //  $CurrentProduct += 1;
        // dd($CurrentProduct);

       

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/product/', $filename);
            $product->image = $filename;
        }
        $product->save();
        return redirect('admin/products')->with('success','Product Added Successfully');
    }
    public function edit($id){
        $category = Category::all();
        $product = Product::find($id);
        return view('admin.edit-product',compact('product','category'));
    }
    public function update(Request $request,$id){
        $request->validate([
            'title' => 'required',
            'sku' => 'required',
            'description' => 'required',
            'category' => 'required',
            'compare_price' => 'required',
            'selling_price' => 'required',
            'quantity' => 'required',
            'tag' => 'required',
            'admin' => 'required',
        ]);
        $product = Product::find($id);
        $product->title = $request->input('title');
        $product->sku = $request->input('sku');
        $product->description = $request->input('description');
        $product->category = $request->input('category');
        $product->compare_price = $request->input('compare_price');
        $product->selling_price = $request->input('selling_price');
        $product->quantity = $request->input('quantity');
        $product->tag = $request->input('tag');
        $product->admin = $request->input('admin');
        $product->slug = Str::slug($request->input('title').'-'.time());


        if($request->hasFile('image')){

            $destination = 'uploads/product/'.$product->image;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/product/', $filename);
            $product->image = $filename;
        }
        
        $product->update();
        return redirect('admin/products')->with('update','Product updated Successfully');
    }

    public function draft($id)
    {
        $product = Product::find($id);
        $product->delete();
        return redirect('admin/products')->with('delete','Product goes in draft');
    }

    public function DraftList()
    {
        $product = Product::onlyTrashed()->get();
        return view('admin.draft-product-list',compact('product'));
    }
    public function RestoreProduct($id)
    {
        $product = Product::withTrashed()->find($id);
        $product->restore();
        return redirect('admin/products')->with('update','Product Restored Successfully');
    }
    public function DeleteProduct($id)
    {
        $product = Product::withTrashed()->find($id);
        $product->forceDelete();
        return redirect('admin/draft-product-list')->with('Product','Admin Permanently Deleted Successfully');
    }
}
