@extends('layouts.app')
@section('content')
<div class="container">
    <div class="wrapper">
        <div class="title">
            <h6>Welcome to Role Management System</h6>
        </div>
        <form action="">
            @if (Auth::check()) @if (Auth::user()->is_role == 2)
            <div class="signin-link">
                Super Admin Already Login
                <a href="{{ url('superadmin/dashboard') }}">Dashboard</a>
            </div>
            @elseif (Auth::user()->is_role == 1)
            <div class="signin-link">
                Admin Already Login
                <a href="{{ url('admin/dashboard') }}">Dashboard</a>
            </div>
            @elseif (Auth::user()->is_role == 0)
            <div class="signin-link">
                User Already Login
                <a href="{{ url('user/dashboard') }}">Dashboard</a>
            </div>
            @endif @else
            <div class="signin-link">
                Login Now?
                <a href="{{ url('login') }}">Login</a>
            </div>
            <div class="signup-link">
                Registration Now?
                <a href="{{ url('registration') }}">Registration</a>
            </div>
            @endif
        </form>
    </div>
</div>
@endsection