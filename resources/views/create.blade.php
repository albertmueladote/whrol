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
                <tr>
                    <td></td>
                    @foreach ($advanced_abilities as $ab)
                        <td>{{$ab->name}}</td>
                    @endforeach
                </tr>
                @foreach ($career_path as $cp)
                    @if ($cont == 13)
                        @php $cont = 1; @endphp
                        <td></td>
                        @foreach ($advanced_abilities as $ab)
                            <td>{{$ab->name}}</td>
                        @endforeach
                    @endif
                    <tr>
                        <td>{{$cp->name}}</td>
                        @foreach ($advanced_abilities as $ab)
                            <td><input data-cp="{{$cp->id_career_path}}" data-ab="{{$ab->id_advanced_ability}}" type="checkbox" value="1"><input data-cp="{{$cp->id_career_path}}" data-ab="{{$ab->id_advanced_ability}}" type="checkbox" value="1"></td>
                        @endforeach
                    </tr>
                    @php $cont++; @endphp
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
    function create()
    {
        $('#result div pre').html('');
        var outputString = '';
        $('input[type="checkbox"]:checked').each(function() {
            var dataCp = $(this).attr('data-cp');
            var dataAb = $(this).attr('data-ab');
            console.log("data-cp:", dataCp, "data-ab:", dataAb);
            outputString += "[\n";
            outputString += "    'id_career_path' => " + dataCp + ",\n";
            outputString += "    'id_advanced_ability' => " + dataAb + ",\n";
            outputString += "    'created_at' => date('Y-m-d H:i:s'),\n";
            outputString += "    'updated_at' => date('Y-m-d H:i:s')\n";
            outputString += "],\n";
        });
       
        $('#result div pre').html(outputString);
    }
</script>
@endsection