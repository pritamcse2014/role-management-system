@extends('layouts.app')
@section('content')
    <div class="container">
        @include('_message')
        <div class="wrapper">
            <div class="title">
                <span>User Dashboard</span>
            </div>
            <form action="" method="">
                <div class="row">
                    <p><b>Name :- </b>{{ $getRecord->name }}</p>
                    <p><b>Email :- </b>{{ $getRecord->email }}</p>
                </div>
                <div class="logout-link">
                    Logout?
                    <a href="{{ url('logout') }}">Logout</a>
                </div>
                <div class="home-link">
                    Home
                    <a href="{{ url('/') }}">Home</a>
                </div>
            </form>
        </div>
    </div>
@endsection