<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Grade Card</title>
</head>

<body>
    <center>
        <img src="{{ asset('images/gradecard.jpg') }}" style="height: 100px;" alt="logo">
        <h1>Check Grade Card</h1>
        <form action="processgradecard" method="post">
            @csrf
            <input type="text" name="enrollment" id="" placeholder="Enter Enrolment Number"><br>
            <input type="submit" value="Search">
        </form><br>
        @if (Session('errormsg'))
            <div style="color: red;">
                {{ Session('errormsg') }}
            </div>
        @endif

        @if (isset($records))
            <table>
                <tr>
                    <td>Enrolment No.:</td>
                    <td>{{ $records->name }}</td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td>{{ $records->name }}</td>
                </tr>
            </table>
            <table>
                <tr>
                    <td>Maths</td>
                    <td>Physics</td>
                    <td>Chemistry</td>
                    <td>Total out of 300</td>
                </tr>
                <tr>
                    <td>
                        @if ($records->sub1 >= 30)
                            {{ $records->sub1 }}
                        @else
                            {{ $records->sub1 }}
                        @endif
                    </td>
                    <td>
                        @if ($records->sub2 >= 30)
                            {{ $records0 > sub2 }}
                        @else
                            {{ $records->sub2 }}
                        @endif
                    </td>
                    <td>
                        @if ($records->sub3 >= 30)
                            {{ $records->sub3 }}
                        @else
                            {{ $records->sub3 }}
                        @endif
                    </td>
                    <td>{{ $records->sub1 + $records->sub2 + $records->sub3 }}</td>
                </tr>
            </table>
        @endif

    </center>
</body>

</html>
