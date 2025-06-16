<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title', 'Siramono')</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    {{-- TailwindCSS CDN (gunakan jika kamu memakai Tailwind) --}}
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- Optional: Bootstrap bisa dihapus jika kamu hanya pakai Tailwind --}}
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> --}}
</head>
<body class="bg-[#ffffff] text-gray-800">

    {{-- Navbar --}}
    @include('partials.navbar')

    {{-- Konten --}}
    <div class="container mx-auto py-4 px-6">
        @yield('content') 
    </div>

</body>
</html>
