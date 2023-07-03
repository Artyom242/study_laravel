<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <ul class="nav">
        <li class="nav-item">
            <a class="nav-link active" href="{{ route('index.main') }}">Active</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('create.main') }}">Create</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="{{ route('index.main') }}">Update</a>
        </li>
        <li class="nav-item">
            <a class="nav-link disabled" href="{{ route('index.main') }}">Disabled</a>
        </li>
    </ul>

    @yield('content')

</body>
</html>
