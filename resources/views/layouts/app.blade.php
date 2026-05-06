<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EssenzeBell</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/navbar.css') }}">
</head>
<body>

<!-- HEADER / NAVBAR -->
    <div>
        @include('layouts.navbar')  
     </div>

<!-- CONTENIDO -->
@yield('content')

<!-- FOOTER -->
<footer class="bg-dark text-white text-center py-3 mt-5">
    @include('layouts.footer')
</footer>

</body>
</html>