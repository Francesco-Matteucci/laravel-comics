<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Pokemon App')</title>
    @vite('resources/js/app.js')
</head>
<body>

    @include('partials.header')

    <main class="d-flex flex-column justify-content-center align-items-center">
        <div class="main-content">
        @yield('content')
    </div>
    </main>

    @include('partials.footer')

</body>
</html>
