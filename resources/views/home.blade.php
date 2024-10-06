@extends('layouts.app')
@vite(['resources/js/home.js'])  <!-- Adjuntar ruta css -->
@section('content')
<body>
<h1 style="text-align: center">
    Este es el home de la pagina
</h1>
<div class="row">
    <div class="col"></div>
    <div class="col"><a href="{{ url('/recomendacion/civil') }}" class="btn btn-primary">Quieres conocer a nuestros primeros abogados especialistas en asesoria civil?</a></div>
    <div class="col"></div>
</div>
</body>
@endsection
