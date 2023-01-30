<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\user;

use Session;

use Illuminate\Support\Facades\File;

class UserController extends Controller
{
    public function index()
    {
        return view('frontend.register');
    }
    public function register(Request $request){
        $request->validate([
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required|unique:users',
            'email' => 'required|unique:users|email',
            'address' => 'required',
            'city' => 'required',
            'pincode' => 'required',
            'gender' => 'required',
            'number' => 'required',
            'password' => 'required|min:5',
            'confirmpassword' => 'required_with:password|same:password|min:5',
            'image' => 'required',
        ]);
        $user = new User;
        $user->firstname = $request->input('firstname');
        $user->lastname = $request->input('lastname');
        $user->email = $request->input('email');
        $user->username = $request->input('username');
        $user->address = $request->input('address');
        $user->city = $request->input('city');
        $user->pincode = $request->input('pincode');
        $user->gender = $request->input('gender');
        $user->number = $request->input('number');
        $user->password = $request->input('password');
        $user->confirmpassword = $request->input('confirmpassword');

        if($request->hasFile('image')){
            $file = $request->file('image');
            $extention = $file->getClientOriginalExtension();
            $filename = time().'.'.$extention;
            $file->move('uploads/user/', $filename);
            $user->image = $filename;
        }
        $user->save();
        return redirect('/');
    }
    public function login()
    {
        return view('frontend.login');
    }

    public function logInUser(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
        $user =  User::where('email','=', $request->email)->first();
        if($user){
            if ($request->input('password') == $user->password)
            {
                $request->session()->put('userid', $user->id);
                $request->session()->put('userfirstname', $user->firstname);
                $request->session()->put('userlastname', $user->lastname);
                $request->session()->put('useremail', $user->email);
                $request->session()->put('userusername', $user->username);
                $request->session()->put('useraddress', $user->address);
                $request->session()->put('usercity', $user->city);
                $request->session()->put('userpincode', $user->pincode);
                $request->session()->put('usernumber', $user->number);
                $request->session()->put('userimage', $user->image);
                return redirect('/');
            }else{
                return redirect('login')->with('error','Password is not Matches.');
            }
        }else{
            return redirect('login')->with('error','Email is not registered.');
        }
    }
    public function logout(){
        if(session()->has('userid')){
            session()->pull('userid');
            session()->pull('userfirstname');
            session()->pull('userlastname');
            session()->pull('useremail');
            session()->pull('useraddress');
            session()->pull('usercity');
            session()->pull('userpincode');
            session()->pull('usernumber');
            session()->pull('userimage');
            return redirect('/');
        }
    }
}
