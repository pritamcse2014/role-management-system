<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Role Management System | Reset Password</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<body>
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
</body>

</html>