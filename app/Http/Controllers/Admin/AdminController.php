<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    public function Index(){
        return view('admin.login_form');
    }

    public function Login(Request $request){
        // dd($request->all());
        $check = $request->all();
        if(Auth::guard('admin')->attempt(['email' => $check['email'], 'password' => $check['password']])){
            return redirect()->route('dashboard.admin')->with('success', 'Admin Logged In Successfully');
        }else{
            return redirect()->route('login.form')->with('error', 'Invalid Credentials');
        }
    }

    public function RegisterForm(){
        return view('admin.register');
    }

    public function RegisterCreate(Request $request){
        Admin::insert([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'created_at' => Carbon::now(),
        ]);

        return redirect()->route('login.form')->with('success', 'Admin Registered Successfully');
    }

    public function AdminDashboard(){
        return view('admin.index');
    }

    public function AdminLogout(){
        Auth::guard('admin')->logout();
        return redirect()->route('login.form')->with('success', 'Admin Logout Successfully');
    }
        
}
