<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Name List</title>
</head>
<body>

    <table class="blueTable">
        <thead>
            <tr>
                <th>User Name</th>
                <th>Address</th>
            </tr>
        </thead>

        <tbody>
            @foreach ($data as $name)
                <tr>
                    <td style="test-align:center; margine-left: 200px;">{{ $name->name }}</td>
                    <td style="test-align:center;">{{ $name->Address }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>

</body>
</html>

