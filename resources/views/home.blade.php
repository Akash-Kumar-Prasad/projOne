<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
</head>

<body>
    <center>
        <h1>
            Session Management
        </h1>
        <form action="processsession" method="post">
            @csrf
            <input type="text" name="t1" id="" placeholder="Enter your value">
            <br>
            <input type="submit" value="Click me">
        </form>

        @if (Session('msg'))
            {{ Session('msg') }}
        @endif
    </center>
</body>

</html>
