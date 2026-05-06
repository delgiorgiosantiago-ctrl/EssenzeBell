@extends('layouts.app')

@section('content')

<!-- HERO CON IMAGEN -->
<section style="
    background-image: url('https://images.unsplash.com/photo-1581578731548-c64695cc6952');
    background-size: cover;
    background-position: center;
    height: 500px;
    color: white;
    display: flex;
    align-items: center;
">
    <div class="container">
        <h1 class="display-4 fw-bold">Limpieza que marca la diferencia</h1>
        <p class="lead">Productos de calidad para tu hogar y negocio</p>
    </div>
</section>

<!-- DESCRIPCIÓN -->
<section class="py-5" style="margin-bottom: 6%;">
    <div class="container text-center">
        <h2 class="mb-3">EssenzeBell</h2>
        <p class="text-muted">
            Ofrecemos productos de limpieza de alta calidad para hogares y empresas.<br>
            Nuestro objetivo es brindarte soluciones eficientes, accesibles y confiables
            para mantener tus espacios impecables.
        </p>
    </div>
</section>

@endsection