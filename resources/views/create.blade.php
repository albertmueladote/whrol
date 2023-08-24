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
        @php $cont = 1; @endphp
        <div class="col-md-12">
            <table>
                
                @foreach ($careerPathAdvancedAbilities as $cpaa)
                    <tr>
                        <td>{{$cpaa->name}}</td>
                        @foreach ($cpaa->advancedAbilities as $aa)
                            <td>
                                {{$aa->name}}
                                <select class="as" data-cp="{{$cpaa->id_career_path}}" data-aa="{{$aa->id_advanced_ability}}" style="display:block">
                                    <option value="0">-Selecciona-</option>
                                    <option value="-1">Cualquiera</option>
                                    @foreach ($advancedSpecializations as $as)
                                        @if ($aa->id_advanced_ability == $as->id_advanced_ability)
                                            <option value="{{$as->id_advanced_specialization}}">{{$as->name}}</option>
                                        @endif 
                                    @endforeach
                                </select>
                            </td>
                        @endforeach
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
    <div class="row" style="margin-top: 32px">
        <div class="col-md-12">
            <button style="width: 10%" class="btn btn-primary"  onClick="create()">Crear inserts</button>
        </div>
    </div>
    <div class="row" style="margin-top: 32px" id="result">
        <div class="col-md-12">
            <pre></pre>
        </div>
    </div>
</div>
<script>
    
</script>
@endsection