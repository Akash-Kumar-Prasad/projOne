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
        {{-- @if (Session('msg'))
        {{Session('msg')}}
    @endif --}}


        @if (@isset($records))
            <h1>User List</h1>
            <table border="1">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($records as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->email }}</td>
                        </tr>
                    @endforeach
        @endif
        </tbody>
        </table>
    </center>
</body>

</html>
