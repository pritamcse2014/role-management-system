@extends('layouts.app')
@section('content')
<div class="container">
    <span style="color: red;">{{ $errors->first('email') }} <br> </span>
    <span style="color: red;">{{ $errors->first('password') }} <br> </span>
    <span style="color: red;">{{ $errors->first('confirm_password') }} <br> </span> @include('_message')
    <div class="wrapper">
        <div class="title">
            <h6>Registration</h6>
        </div>
        <form action="{{ url('registration') }}" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <i class="fas fa-user"></i>
                <input type="text" name="name" value="{{ old('name') }}" id="" placeholder="Enter Your Name" required>
            </div>
            <div class="row">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" value="{{ old('email') }}" id="" placeholder="Enter Your Email" required>
            </div>
            <div class="row">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" value="" id="" placeholder="Enter Your Password" required>
            </div>
            <div class="row">
                <i class="fas fa-lock"></i>
                <input type="password" name="confirm_password" value="" id="" placeholder="Enter Your Confirm Password" required>
            </div>
            <div class="row">
                <select class="selectbox" name="is_role" id="" required>
                    <option value="">Select Role</option>
                    <option {{ old( 'is_role'=='2' ? 'selected' : '') }} value="2">Super Admin</option>
                    <option {{ old( 'is_role'=='1' ? 'selected' : '') }} value="1">Admin</option>
                    <option {{ old( 'is_role'=='0' ? 'selected' : '') }} value="0">User</option>
                </select>
            </div>
            <div class="password">
                <a href="{{ url('forgotPassword') }}">Forgot Password</a>
            </div>
            <div class="row button">
                <input type="submit" value="Registration">
            </div>
            <div class="signin-link">
                Login?
                <a href="{{ url('login') }}">Login</a>
            </div>
            <div class="home-link">
                Home
                <a href="{{ url('/') }}">Home</a>
            </div>
        </form>
    </div>
</div>
@endsection