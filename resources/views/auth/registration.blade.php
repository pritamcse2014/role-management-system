<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Role Management System | Registration</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<body>
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
                        <option value="2">Super Admin</option>
                        <option value="1">Admin</option>
                        <option value="0">User</option>
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
</body>

</html>