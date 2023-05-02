@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/test.css') }}">
@endsection

@section('js')
    <script src="{{ asset('js/test.js') }}"></script>
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <button id="create" class="btn btn-primary">Crear</button>
        </div>
        <div class="col-md-12">
            <table>
                <thead>
                    <th>Nombre</th>
                    @foreach ($race AS $r)
                        <th>{{ $r->name }}</th>
                    @endforeach
                </thead>
                <tbody>
               @foreach ($profession AS $p)
                    @if ($p->id_career_path % 4 == 1 && $p->id_career_path > 1)
                        <tr><th>Nombre</th>
                        @foreach ($race AS $r)
                            <th>{{ $r->name }}</th>
                        @endforeach
                        </tr>
                    @endif
                    <tr>
                    <td>{{$p->name}}</td>
                    @foreach ($race AS $r)
                        <td>
                           <input data-r="{{$r->id_race}}" data-p="{{$p->id_profession}}" type="checkbox">
                        </td>
                    @endforeach
                    </tr>
               @endforeach
               </tbody>
           </table>
        </div>
        <div class="col-md-12" id="result">
        </div>
    </div>
</div>
@endsection