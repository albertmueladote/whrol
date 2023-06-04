@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/new.css') }}">
@endsection

@section('js')
    <script src="{{ asset('js/new.js') }}"></script>
@endsection

@section('content')
<div class="container-new page page-1">
    <section-one></section-one>
    <section-two></section-two>
    <section-three></section-three>
    <section-four></section-four>
</div>
<div class="container-new page page-2">
    <div class="section section-5">
        <div class="buttons-left buttons-left-5">       
        </div>
        <div class="sheet sheet-5">
            <div class="next"></div>
        </div>
        <div class="buttons-right buttons-right-5">       
        </div>
    </div>
</div>      
@endsection
