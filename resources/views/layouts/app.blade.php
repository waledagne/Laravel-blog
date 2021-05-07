<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel blog</title>
<<<<<<< HEAD
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
=======
    <link rel = "stylesheet" href="{{asset('css/app.css')}}">
>>>>>>> parent of 6eeb22f... configured tailwind css
</head>
<body class="bg-gray-100">

    <nav class="p-6 bg-white flex justify-between">
    <ul class="flex items-center">
        <li>
            <a href="" class="p-3">Home</a>
        </li>
        <li>
            <a href="" class="p-3">Dashboard</a>
        </li>
        <li>
            <a href="" class="p-3">Posts</a>
        </li>
    </ul>
    </nav>
    @yield('content')

</body>
</html>