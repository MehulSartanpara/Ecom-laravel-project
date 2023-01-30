<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\admin;
use App\Models\product;

use Illuminate\Support\Facades\File;

class adminsConroller extends Controller
{
    public function index(){
        $admin = Admin::all();
        return view('admin.admins',compact('admin'));
    }
    public function create(){
        return view('admin.add-admin');
    }
    public function store(Request $request){
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required|unique:admins',
            'email' => 'required|unique:admins|email',
            'password' => 'required',
            'role' => 'required',
            'gender' => 'required',
            'no_of_product' => 'required',
            'profile' => 'required',
        ]);
        $admin = new Admin;
        $admin->firstname = $request->input('firstname');
        $admin->lastname = $request->input('lastname');
        $admin->email = $request->input('email');
        $admin->username = $request->input('username');
        $admin->password = $request->input('password');
        $admin->gender = $request->input('gender');
        $admin->role = $request->input('role');
        $admin->no_of_product = $request->input('no_of_product');

        if($request->hasFile('profile')){
            $file = $request->file('profile');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/admin/', $filename);
            $admin->profile = $filename;
        }
        
        $admin->save();
        return redirect('admin/admins')->with('success','Admin Added Successfully');
    }
    public function edit($id){
        $admin = Admin::find($id);
        return view('admin.edit-admin',compact('admin'));
    }
    public function update(Request $request,$id){
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'role' => 'required',
            'gender' => 'required',
            'no_of_product' => 'required',
        ]);
        $admin = Admin::find($id);
        $admin->firstname = $request->input('firstname');
        $admin->lastname = $request->input('lastname');
        $admin->email = $request->input('email');
        $admin->username = $request->input('username');
        $admin->password = $request->input('password');
        $admin->gender = $request->input('gender');
        $admin->role = $request->input('role');
        $admin->no_of_product = $request->input('no_of_product');

        if($request->hasFile('profile')){

            $destination = 'uploads/admin/'.$admin->profile;
            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $request->file('profile');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/admin/', $filename);
            $admin->profile = $filename;
        }
        
        $admin->update();
        return redirect('admin/admins')->with('update','Admin Updated Successfully');
    }
    public function draft($id)
    {
        $admin = Admin::find($id);
        $admin->delete();
        return redirect('admin/admins')->with('delete','Admin goes in draft');
    }

    public function DraftList()
    {
        $admin = Admin::onlyTrashed()->get();
        return view('admin.draft-admin-list',compact('admin'));
    }
    public function RestoreAdmin($id)
    {
        $admin = Admin::withTrashed()->find($id);
        $admin->restore();
        return redirect('admin/admins')->with('update','Admin Restored Successfully');
    }
    public function DeleteAdmin($id)
    {
        $admin = Admin::withTrashed()->find($id);
        $admin->forceDelete();
        return redirect('admin/draft-admin-list')->with('delete','Admin Permanently Deleted Successfully');
    }
}
