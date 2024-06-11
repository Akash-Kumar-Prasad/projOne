<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ClientForm</title>
</head>
<body>
  <center>
    <h1>User Registration Form</h1>
    <form action="processuserform" method="post">
      @csrf
      <input type="text" name="name" id="" placeholder="Enter Name"><br>
      <input type="text" name="email" id="" placeholder="Enter Email"><br>
      <input type="submit" value="Click Me!">
    </form>
    <br>
    @if (Session('msg'))
        {{Session('msg')}}
    @endif
  </center>
</body>
</html>