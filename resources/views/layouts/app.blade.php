<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Hello Laravel World')</title>
    @vite('resources/js/app.js')
</head>

<body>
    <section class="container p-3">
        @include('partials.header')
    </section>

    <section class="container p-3">
        @yield('content')
    </section>


</body>

</html>
