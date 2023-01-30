<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;

class CategoryController extends Controller
{
    public function index(){
        $category = category::all();
        return view('admin.categorys',compact('category'));
    }
    public function create(){
        return view('admin.add-category');
    }
    public function store(Request $request){
        $request->validate([
            'category_name' => 'required',
            'admin' => 'required',
        ]);
        $category = new Category();
        $category->category_name = $request->input('category_name');
        $category->no_of_product = '0';
        $category->username = $request->input('admin');
        $category->save();
        return redirect('admin/categorys')->with('success','Category Added Successfully');
    }

    public function edit($id){
        $category = Category::find($id);
        return view('admin.edit-category',compact('category'));
    }

    public function update(Request $request,$id){
        $request->validate([
            'category_name' => 'required',
        ]);
        $category = Category::find($id);
        $category->category_name = $request->input('category_name');
        $category->no_of_product = $request->input('no_of_product');
        $category->username = $request->input('username');
        $category->update();
        return redirect('admin/categorys')->with('update','Category Updated Successfully');
    }
    public function delete($id)
    {
        $category = Category::find($id);
        $category->delete();
        return redirect('admin/categorys')->with('delete','Category Deleted Successfully');
    }
}
