<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function Registration() {
        return view('auth.registration');
    }

    public function RegistrationStore(Request $request) {
        // dd($request->all());
        $save = $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'password' => 'required|min:6',
            'confirm_password' => 'required_with:password|same:password|min:6',
            'is_role' => 'required',
        ]);
        $save = new User;
        $save->name = trim($request->name);
        $save->email = trim($request->email);
        $save->password = Hash::make($request->password);
        $save->is_role = trim($request->is_role);
        $save->remember_token = Str::random(50);
        $save->save();

        return redirect('login')->with('success', 'Registration Successfully.');
    }
    
    public function Login() {
        return view('auth.login');
    }
    
    public function ForgotPassword() {
        return view('auth.forgotPassword');
    }
}
