<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daud K</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body class="bg-gray-700 text-white scrollbar-thin scrollbar-thumb-gray-900 scrollbar-track-gray-100">
    <header class="fixed bg-gray-700 top-0 left-0 right-0 z-50">
        <div class="container mx-auto flex justify-between p-4">
            <h1 class="font-bold text-xl">Daud K</h1>
            <nav class="-mx-2">
                <a href="{{ route('home') }}" class="text-lg mx-2 text-white hover:text-pink-500 transition">Home</a>
                <a href="{{ route('about') }}" class="text-lg mx-2 text-white hover:text-pink-500 transition">About</a>
            </nav>
        </div>
    </header>
    <main>
        @yield('page-content')
    </main>
    <footer class="container mx-auto p4 mb-4">
        <p>&copy; Daud K | Learn to Code</p>
    </footer>
    
</body>
</html>