@extends('layouts.app')
@section('content')
<body>
<div class="row">
    <div class="col"></div>
    <div class="col" style="text-align: center">
        <h1>
            Este es el chatbot laboral
        </h1>
        <a href="{{ url('/chatbot') }}" class="btn btn-primary">Ir al Chatbot</a>
    </div>
    <div class="col"></div>
</div>
</body>
@endsection
