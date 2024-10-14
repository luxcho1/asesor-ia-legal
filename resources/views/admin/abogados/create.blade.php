@extends('layouts.admin')
@section('content')
<body>
  <h1 style="text-align: center">Registro Abogados</h1>

  <div class="container">    
    <form action="{{ url('/abogados') }}" method="post" enctype="multipart/form-data">
    @csrf
    @include('admin.abogados.formulario',['modo'=>'Ingresar'])
    </form>
    </div>
</body>
@endsection