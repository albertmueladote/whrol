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
            <table id="data">
                <thead>
                    <tr><th>Profesión</th><th>Talento</th><th>Talento</th><th>Talento</th><th>Talento</th></tr>
                </thead>
                <tbody>
                @foreach ($career_path as $cp)
                    <tr data-cp = "{{$cp->id_career_path}}">
                        <td class="career_path">{{$cp->name}}</td>
                        <td class="talent_1">{!! $selects[$cp->id_career_path][0] !!}</td>
                        <td class="talent_2">{!! $selects[$cp->id_career_path][1] !!}</td>
                        <td class="talent_3">{!! $selects[$cp->id_career_path][2] !!}</td>
                        <td class="talent_4">{!! $selects[$cp->id_career_path][3] !!}</td>
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
                    <td class="result"></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<script>
    function create()
    {
        $('#result .result').html('');
        $('#data tbody tr').each(function() {
            var id_career_path = $(this).data('cp');
            var talent_1 = $(this).find('td.talent_1 select').val();
            var talent_2 = $(this).find('td.talent_2 select').val();
            var talent_3 = $(this).find('td.talent_3 select').val();
            var talent_4 = $(this).find('td.talent_4 select').val();
           
            if(talent_1 !== undefined && talent_1 > 0) {
                var string = '<pre>[' +
                '\n\t\'id_career_path\' => ' + id_career_path + ',' +
                '\n\t\'id_talent\' => ' + talent_1 + ',' +
                '\n\t\'created_at\' => date(\'Y-m-d H:i:s\'),' +
                '\n\t\'updated_at\' => date(\'Y-m-d H:i:s\'),' +
                '\n],</pre>';
                $('#result .result').append(string);
            }
            if(talent_2 !== undefined && talent_2 > 0) {
                var string = '<pre>[' +
                '\n\t\'id_career_path\' => ' + id_career_path + ',' +
                '\n\t\'id_talent\' => ' + talent_2 + ',' +
                '\n\t\'created_at\' => date(\'Y-m-d H:i:s\'),' +
                '\n\t\'updated_at\' => date(\'Y-m-d H:i:s\'),' +
                '\n],</pre>';
                $('#result .result').append(string);
            }
            if(talent_3 !== undefined && talent_3 > 0) {
                var string = '<pre>[' +
                '\n\t\'id_career_path\' => ' + id_career_path + ',' +
                '\n\t\'id_talent\' => ' + talent_3 + ',' +
                '\n\t\'created_at\' => date(\'Y-m-d H:i:s\'),' +
                '\n\t\'updated_at\' => date(\'Y-m-d H:i:s\'),' +
                '\n],</pre>';
                $('#result .result').append(string);
            }
            if(talent_4 !== undefined && talent_4 > 0) {
                var string = '<pre>[' +
                '\n\t\'id_career_path\' => ' + id_career_path + ',' +
                '\n\t\'id_talent\' => ' + talent_4 + ',' +
                '\n\t\'created_at\' => date(\'Y-m-d H:i:s\'),' +
                '\n\t\'updated_at\' => date(\'Y-m-d H:i:s\'),' +
                '\n],</pre>';
                $('#result .result').append(string);
            }
        });
    }
</script>
@endsection
