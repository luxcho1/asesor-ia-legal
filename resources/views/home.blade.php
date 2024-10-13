@extends('layouts.app')
@section('content')
@vite(['resources/css/home.css', 'resources/js/home.js'])
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
