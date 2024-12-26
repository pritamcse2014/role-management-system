@extends('layouts.app')
@section('content')
<div class="container">
    <span style="color: red;">{{ $errors->first('password') }} <br> </span>
    <span style="color: red;">{{ $errors->first('confirm_password') }} <br> </span> @include('_message')
    <div class="wrapper">
        <div class="title">
            <h6>Reset Password</h6>
        </div>
        <form action="{{ url('resetPassword/' .$token) }}" method="POST">
            {{ csrf_field() }}
            <div class="row">
                <i class="fas fa-lock"></i>
                <input type="password" name="password" value="" id="" placeholder="Enter Your Password" required>
            </div>
            <div class="row">
                <i class="fas fa-lock"></i>
                <input type="password" name="confirm_password" value="" id="" placeholder="Enter Your Confirm Password" required>
            </div>
            <div class="row button">
                <input type="submit" value="Reset Password">
            </div>
        </form>
    </div>
</div>
@endsection