@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/sheets.css') }}">
@endsection

@section('js')
    <script src="{{ asset('js/sheets.js') }}"></script>
@endsection

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="filters">
                <input type="text" class="form-control" id="filter" placeholder="Buscar">
            </div>
            <div class="sheets">
                @foreach ($sheets as $sheet)
                <div class="sheet-content">    
                    <div class="sheet" data-sheet="{{$sheet->id_user_sheet}}">
                        <div class="name"><b>Nombre:</b> {{$sheet->name}}</div>
                        <div class="race"><b>Raza:</b> {{$sheet->race->name}}</div>
                        <div class="career_path"><b>Profesión:</b> {{$sheet->careerPath->name}}</div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
