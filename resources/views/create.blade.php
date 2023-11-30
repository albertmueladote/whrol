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
            <table id="data">
                <thead>
                    <tr><th>Talentos</th><th>Características</th><th>Max</th><th>Habilidades básicas</th><th>Habilidades avanzadas</th></tr>
                </thead>
                <tbody>
                @foreach ($talents as $talent)
                    <tr data-talent = "{{$talent->id_talent}}">
                        <td class="talent">{{$talent->name}}</td>
                        <td class="ch">{!! $select_ch !!}</td>
                        <td class="max"><input class="max" type="text"></td>
                        <td class="ba">{!! $select_ba !!}</td>
                        <td class="aa">{!! $select_aa !!}</td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="row" style="margin-top: 32px">
        <div class="col-md-12">
            <button style="width: 10%" class="btn btn-primary"  onClick="create()">Crear inserts</button>
        </div>
    </div>
    <div class="row" style="margin-top: 32px">
        <div class="col-md-12">
            <table id="result">
                <tr>
                    <td class="ch"></td>
                    <td class="max"></td>
                    <td class="ba"></td>
                    <td class="aa"></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<script>
    function create()
    {
        var talent_max_characteristics_table = [];
        var talent_max_table = [];
        var talent_basic_ability_check = [];
        var talent_advanced_ability_check = [];
        $('#data tbody tr').each(function() {
            var id_talent = $(this).data('talent');
            
            var ch = $(this).find('td.ch select').val();
            var max = $(this).find('td.max input').val();
            var ba = $(this).find('td.ba select').val();
            var aa = $(this).find('td.aa select').val();
            $('#result .ch').html('');
            $('#result .max').html('');
            $('#result .ba').html('');
            $('#result .aa').html('');
            if(id_talent !== undefined){
                if(ch > 0)
                {
                    talent_max_characteristics_table.push({
                        'id_talent': id_talent,
                        'id_characteristic': ch
                    });
                }
                if(max !== '' && max !== undefined)
                {
                    talent_max_table.push({
                        'id_talent': id_talent,
                        'max': max
                    });
                }
                if(ba > 0)
                {
                    talent_basic_ability_check.push({
                        'id_talent': id_talent,
                        'id_basic_ability': ba
                    });
                }
                if(aa > 0)
                {
                    talent_advanced_ability_check.push({
                        'id_talent': id_talent,
                        'id_advanced_ability': aa
                    });
                }
            }
        });
        $.each(talent_max_characteristics_table, function(index, value) {
            var string = '<pre>[' +
            '\n\t\'id_talent\' => ' + value.id_talent + ',' +
            '\n\t\'id_characteristic\' => ' + value.id_characteristic + ',' +
            '\n\t\'created_at\' => date(\'Y-m-d H:i:s\'),' +
            '\n\t\'updated_at\' => date(\'Y-m-d H:i:s\'),' +
            '\n],</pre>';
            $('#result .ch').append(string);
        });
        $.each(talent_max_table, function(index, value) {
            var string = '<pre>[' +
            '\n\t\'id_talent\' => ' + value.id_talent + ',' +
            '\n\t\'max\' => ' + value.max + ',' +
            '\n\t\'created_at\' => date(\'Y-m-d H:i:s\'),' +
            '\n\t\'updated_at\' => date(\'Y-m-d H:i:s\'),' +
            '\n],</pre>';
            $('#result .max').append(string);
        });
        $.each(talent_basic_ability_check, function(index, value) {
            var string = '<pre>[' +
            '\n\t\'id_talent\' => ' + value.id_talent + ',' +
            '\n\t\'id_basic_ability\' => ' + value.id_basic_ability + ',' +
            '\n\t\'created_at\' => date(\'Y-m-d H:i:s\'),' +
            '\n\t\'updated_at\' => date(\'Y-m-d H:i:s\'),' +
            '\n],</pre>';
            $('#result .ba').append(string);
        });
        $.each(talent_advanced_ability_check, function(index, value) {
            var string = '<pre>[' +
            '\n\t\'id_talent\' => ' + value.id_talent + ',' +
            '\n\t\'id_advanced_ability\' => ' + value.id_advanced_ability + ',' +
            '\n\t\'created_at\' => date(\'Y-m-d H:i:s\'),' +
            '\n\t\'updated_at\' => date(\'Y-m-d H:i:s\'),' +
            '\n],</pre>';
            $('#result .aa').append(string);
        });
    }
</script>
@endsection
