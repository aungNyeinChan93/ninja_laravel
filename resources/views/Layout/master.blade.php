<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Master </title>
    @vite('resources/css/app.css')
</head>

<body>
    <div class=" container mx-auto my-2">
        <nav class=" flex justify-between list-group">
            <li class='list-group-item p-2 bg-green-400 rounded text-center'><a href="{{ route('home') }}">Home</a></li>
            <li class='list-group-item p-2 bg-green-400 rounded text-center'><a href="{{ route('about') }}">About</a>
            </li>
            <li class='list-group-item p-2 bg-green-400 rounded text-center'><a href="{{ route('test') }}">Test</a></li>
            <li class='list-group-item p-2 bg-green-400 rounded text-center'><a
                    href="{{ route('ninjas.index') }}">Ninjas</a></li>
        </nav>
        <main>
            @yield('content')
        </main>
    </div>
</body>

</html>
