<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <title>{{ title() }}</title>

    <link rel="shortcut icon" href="{{ asset('images/favicon.svg') }}" type="image/svg+xml">

    <link rel="stylesheet" href="{{ asset('css/app.min.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/Font-Awesome/css/all.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/Rpg-Awesome/css/rpg-awesome.min.css') }}">
    @stack('styles')
</head>
<body>
    <x-layout.frontend.header />

    {{ $slot }}

    <x-layout.frontend.footer />

    <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    @stack('scripts')
    <script src="{{ asset('js/app.min.js') }}"></script>
</body>
</html>
