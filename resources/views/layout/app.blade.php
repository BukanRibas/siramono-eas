<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Siramono</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Bootstrap CDN --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    @include('partials.navbar')

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
<a href="{{ route('komunitas') }}" class="{{ request()->is('komunitas') ? 'text-green-900 font-bold' : '' }}">
  Komunitas
</a>

