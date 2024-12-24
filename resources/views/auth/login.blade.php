<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Role Management System | Login</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<body>
    <div class="container">
        @include('_message')
        <div class="wrapper">
            <div class="title">
                <h6>Login</h6>
            </div>
            <form action="">
                <div class="row">
                    <i class="fas fa-envelope"></i>
                    <input type="email" name="email" value="" id="" placeholder="Enter Your Email" required>
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
</body>

</html>