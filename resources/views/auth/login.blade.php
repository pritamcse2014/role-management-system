@extends('layouts.app')
@section('content')
<div class="container">
    @include('_message')
    <div class="wrapper">
        <div class="title">
            <h6>Login</h6>
        </div>
        <form action="{{ url('login') }}" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" value="{{ old('email') }}" id="" placeholder="Enter Your Email" required>
            </div>
            <div class="row">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" value="" id="" placeholder="Enter Your Password" required>
            </div>
            <div class="password">
                <a href="{{ url('forgotPassword') }}">Forgot Password</a>
            </div>
            <div class="row button">
                <input type="submit" value="Login">
            </div>
            <div class="signup-link">
                Registration?
                <a href="{{ url('registration') }}">Registration</a>
            </div>
            <div class="home-link">
                Home
                <a href="{{ url('/') }}">Home</a>
            </div>
        </form>
    </div>
</div>
@endsection