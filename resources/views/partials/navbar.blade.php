<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    @vite('resources/css/app.css')
    <title>Document</title>
</head>
<body>
    <div class="flex justify-between items-center px-10 py-6 bg-white">
        <img src="{{ asset('img/siramono_logo.png') }}" alt="Logo Siramono" class="h-16" />
        <div class="flex gap-12 font-large">
        <a class="font-bold" style="text-decoration: none; color: rgb(2, 66, 2); " href="{{ route(name: 'beranda') }}">Beranda</a>
        <a class="text-black" style="text-decoration: none;" href="{{ route('tanamanku') }}">Tanamanku</a>
        <a class="text-black" style="text-decoration: none;" href="">Komunitas</a>
        </div>
        <div class="flex items-center gap-4">
        <span>{{ Auth::user()->name ?? 'Guest' }}</span>
        <a href="">
            <img src="{{ asset('img/avatar.png') }}" class="w-10 h-10 rounded-full object-cover" alt="User Profile" />
        </a>
        </div>
    </div>
</body>     
</html>

