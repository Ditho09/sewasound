<!-- resources/views/layouts/app.blade.php -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'My App')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!-- CSS Laravel Mix atau Bootstrap -->
    <script src="{{ asset('js/app.js') }}" defer></script>
</head>
<body>
    @include('partials.navbar') <!-- opsional, buat navbar di partials/navbar.blade.php -->
    <div class="container mt-4">
        @yield('content')
    </div>
</body>
</html>