<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardController extends Controller
{
    public function Dashboard() {
        if (Auth::user()->is_role == 2) {
            $data['metaTitle'] = 'Super Admin';
            $data['getRecord'] = User::find(Auth::user()->id);
            return view('superadmin.dashboard', $data);
        } elseif (Auth::user()->is_role == 1) {
            $data['metaTitle'] = 'Admin';
            $data['getRecord'] = User::find(Auth::user()->id);
            return view('admin.dashboard', $data);
        } elseif (Auth::user()->is_role == 0) {
            $data['metaTitle'] = 'User';
            $data['getRecord'] = User::find(Auth::user()->id);
            return view('user.dashboard', $data);
        }
    }
}
