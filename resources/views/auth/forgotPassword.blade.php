@extends('layouts.app')
@section('content')
<div class="container">
    @include('_message')
    <div class="wrapper">
        <div class="title">
            <h6>Forgot Password</h6>
        </div>
        <form action="{{ url('forgotPassword') }}" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <i class="fas fa-envelope"></i>
                <input type="email" name="email" value="{{ old('email') }}" id="" placeholder="Enter Your Email" required>
            </div>
            <div class="row button">
                <input type="submit" value="Forgot Password">
            </div>
            <div class="signin-link">
                Login?
                <a href="{{ url('login') }}">Login</a>
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