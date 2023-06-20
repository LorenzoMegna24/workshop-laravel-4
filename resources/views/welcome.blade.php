<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <header>
        <h1>Lista pizze</h1>
        <div class="container d-flex my-3">
            {{-- HOME  --}}
            <a class="nav-link mx-2" href="{{route('pizzas.index')}}">Home</a>
            {{-- CREATE --}}
            <a class="nav-link mx-2" href="{{route('pizzas.create')}}">Create</a>  
        </div>
         
    </header>
    
    @yield('content')

    <h2>aiesfbgaiwrbfgaiuwerb</h2>
</body>

</html>