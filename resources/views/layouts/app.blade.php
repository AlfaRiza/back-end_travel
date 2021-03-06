<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Font -->
    @stack('prepend-style')
    @include('includes.style')
    @stack('addon-script')
</head>

<body>
    @include('includes.navbar')
    @yield('content')
    @include('includes.footer')
    @stack('addon-script')
    @include('includes.script')
    @stack('addon-script')
</body>
</html>