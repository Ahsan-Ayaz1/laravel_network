<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ninjas Network | Home</title>
</head>
<body>
    <h2>Currently Available Ninjas</h2>
    <ul>
        @foreach ($ninjas as $ninja )
            <li>
                <a href="ninjas/{{ $ninja["id"] }}"> {{ $ninja["name"] }} </a>
            </li>
        @endforeach
    </ul>
</body>
</html>