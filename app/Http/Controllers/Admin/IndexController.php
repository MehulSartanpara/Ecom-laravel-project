<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\admin;
use App\Models\product;
use App\Models\category;

use Session;

class IndexController extends Controller
{
    public function index(){
        $CountAdmin = Admin::count();
        $CountProduct = Product::count();
        $CountCategory = Category::count();
        return view('admin.index',compact('CountAdmin','CountProduct','CountCategory'));
    }
    public function LogIn(Request $request){
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $admin =  Admin::where('email','=', $request->email)->first();
        if($admin){
            if ($request->input('password') == $admin->password)
            {
                $request->session()->put('loginId', $admin->id);
                $request->session()->put('firstname', $admin->firstname);
                $request->session()->put('lastname', $admin->lastname);
                $request->session()->put('email', $admin->email);
                $request->session()->put('admin', $admin->username);
                $request->session()->put('profile', $admin->profile);
                $request->session()->put('no_of_product', $admin->no_of_product);
                $request->session()->put('role', $admin->role);
                return redirect('admin/index');
            }else{
                return redirect('admin')->with('error','Password is not Matches.');
            }
        }else{
            return redirect('admin')->with('error','Email is not registered.');
        }
    }
    public function LogOut(){
        if(session()->has('loginId')){
            session()->pull('loginId');
            session()->pull('firstname');
            session()->pull('lastname');
            session()->pull('email');
            session()->pull('admin');
            session()->pull('profile');
            session()->pull('no_of_product');
            session()->pull('role');
            return redirect('/admin');
        }
    }
}
