<?php

namespace App\Http\Controllers;

use App\Http\Requests\ResetPassword;
use App\Mail\ForgotPasswordMail;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class AuthController extends Controller
{
    public function Registration() {
        $data['metaTitle'] = 'Registration';
        return view('auth.registration', $data);
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
        $data['metaTitle'] = 'Login';
        return view('auth.login', $data);
    }
    
    public function LoginStore(Request $request) {
        // dd($request->all());
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], true)) {
            if (Auth::user()->is_role == '2') {
                // echo 'Super Admin';
                // die();
                return redirect()->intended('superadmin/dashboard');
            } elseif (Auth::user()->is_role == '1') {
                // echo 'Admin';
                // die();
                return redirect()->intended('admin/dashboard');
            } elseif (Auth::user()->is_role == '0') {
                // echo 'User';
                // die();
                return redirect()->intended('user/dashboard');
            } else {
                return redirect('login')->with('error', 'No Available Email....');
            }
        } else {
            return redirect()->back()->with('error', 'Login Failed....');
        }
    }
    
    public function ForgotPassword() {
        $data['metaTitle'] = 'Forgot Password';
        return view('auth.forgotPassword', $data);
    }

    public function ForgotPasswordStore(Request $request) {
        // dd($request->all());
        $count = User::where('email', '=', $request->email)->count();
        if ($count > 0) {
            $user = User::where('email', '=', $request->email)->first();
            // $user->remember_token = Str::random(50);
            $user->save();

            Mail::to($user->email)->send(new ForgotPasswordMail($user));
            
            return redirect()->back()->with('success', 'Password has been Sent Email.');
        } else {
            return redirect()->back()->with('error', 'Email Not Found.');
        }
    }

    public function ResetPassword($token) {
        // dd($token);
        $user = User::where('remember_token', '=', $token);
        if ($user->count() == 0) {
            abort(403);
        }
        $user = $user->first();
        $data['token'] = $token;
        $data['metaTitle'] = 'Reset Password';
        return view('auth.resetPassword', $data);
    }

    public function ResetPasswordStore(ResetPassword $request, $token) {
        $user = User::where('remember_token', '=', $token);
        if ($user->count() == 0) {
            abort(403);
        }
        $user = $user->first();
        $user->password = Hash::make($request->password);
        $user->remember_token = Str::random(50);
        $user->save();
        
        return redirect('login')->with('success', 'Password Reset Successfully.');
    }

    public function Logout() {
        Auth::logout();
        return redirect(url('/'));
    }
}
