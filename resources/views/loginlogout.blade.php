<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Client</title>
</head>
<body>
    <center>
        <h1>Login & Logout</h1>
        @php
            if (Session('uid')) {
                $userinfo = Session::get('uid');
                echo $userinfo->name;
                echo "<a href='logout'>Logout</a>";
            }else {
        @endphp
                <form action="llprocess" method="POST">
                @csrf
                <input type="text" name="email" id="" placeholder="Enter Your Email"><br>
                <input type="text" name="password" id="" placeholder="Enter Your Password"><br>
                <input type="submit" value="Login">
                </form>
        @php
            }
        @endphp

        @if (Session('report'))
            {{ Session('report') }}
        @endif
    </center>
</body>
</html>