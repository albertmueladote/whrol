@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('¡Bienvenido!') }}</div>

                <div class="card-body">
                     <a href="{{ url('/new') }}"><div class="card text-center cursor-pointer"><h3>Crear una ficha</h3></div></a>
                     <div class="card text-center mt-3"><h4>Cargar una ficha</h4></div>
                     <div class="card text-center mt-3"></div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
