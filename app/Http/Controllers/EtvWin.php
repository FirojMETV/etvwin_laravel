<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Hash;
use Session;

class EtvWin extends Controller
{
    // login form 
    public function login()
    {
        return view('login');
    }
    // registration form
    public function registration()
    {
        return view('registration');
    }
    public function registerUser(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'Email' => 'required|Email|unique:users',
            'password' => 'required|min:8|max:15',
            'repassword' => 'required|confirmed|',
        ]);
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->Email;
        $user->password = Hash::make($request->password);
        $user->REpassword = Hash::make($request->repassword);
        $res = $user->save();
        if ($res) {
            return back()->with('success', 'you have registered success');
        } else {
            return back()->with('failed', 'somethinge worng');
        }
    }
    public function loginUser(Request $request)
    {
        $request->validate([
            'Email' => 'required|email|',
            'password' => 'required|min:8|max:15', 
        ]);
        $user = User::where('email', '=', $request->Email)->first();
        if ($user) {
            if (Hash::check($request->password, $user->password)) {
                $request->session()->put('loginId', $user->id);
                return redirect('dashboard');
            } else {
                return back()->with('failed', 'password not matched');
            }
        } else {
            return back()->with('failed', 'this email is not registered');
        }
    }
    public function dashboard()
    {
        $data =array();
        if(Session::has('loginId')){
            $data=User::where('id','=',Session::get('loginId'))->first();
        }
        return view('dashboard',compact('data'));
    }
    public function logout(){
        if(Session::has('loginId')){
            Session::pull('loginId');
            return redirect(('login'));
        }
    }
}