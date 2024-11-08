@extends('layouts.admin')
@section('content')
<div class="container">
    <head>
        <form action="{{ route('abogados.update', $abogado->id) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            {{ method_field('PATCH') }}
            @include('admin.abogados.formulario',['modo'=>'Editar'])
        </form>
    </head> 
</div>
@endsection