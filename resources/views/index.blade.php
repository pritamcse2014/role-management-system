<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Role Management System</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
</head>

<body>
    <div class="container">
        <div class="wrapper">
            <div class="title">
                <h6>Welcome to Role Management System</h6>
            </div>
            <form action="">
                <div class="signin-link">
                    Login Now?
                    <a href="">Login</a>
                </div>
                <div class="signup-link">
                    Registration Now?
                    <a href="{{ url('registration') }}">Registration</a>
                </div>
            </form>
        </div>
    </div>
</body>

</html>