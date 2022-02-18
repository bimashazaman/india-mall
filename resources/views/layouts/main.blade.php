<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    {{-- link the css file --}}
    <link rel="stylesheet" href="{{ asset('assets/app.css') }}">
    <title>India Mall</title>
</head>
<body>

    @include('partials.header')
    @yield('content')
    @include('partials.footer')
    <script src="{{ asset('assets/app.js') }}"></script>
    {{-- @yield('scripts') --}}
</body>
</html>
