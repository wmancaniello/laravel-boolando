<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Boolando Laravel</title>

    <!-- Includiamo gli assets con la direttiva vite -->
    @vite('resources/js/app.js')
</head>

<body>
    {{-- Header --}}
    @include('partials.header')
    {{-- /Header --}}

    <hr>

    <main>
        @yield('content')
    </main>

    <hr>

    {{-- Footer --}}
    @include('partials.footer')
    {{-- /Footer --}}
</body>

</html>
