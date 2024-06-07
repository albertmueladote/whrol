@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/sheet.css') }}">
@endsection

@section('js')
    <script src="{{ asset('js/sheet.js') }}"></script>
@endsection

@section('content')

<sheet :sheet="{{$sheet}}"></sheet>

@endsection