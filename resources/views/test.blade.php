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
            <table>
                <thead>
                    <tr>
                        <th>Talento</th>
                    </tr>
                </thead>
                @foreach ($professions as $profession)
                    <tr>
                        <td rowspan="5">{{$profession->name}}</td>
                        @foreach ($profession->careerPaths as $career_path)
                            <tr>
                                <td>{{$career_path->name}}</td>
                                <td>
                                @php $first = true; @endphp
                                @foreach ($career_path->BasicAbilities as $basic_ability)
                                    
                                    @if(isset($basic_ability->basicSpecialization))
                                        @foreach ($basic_ability->basicSpecialization as $basic_specialization)
                                            @if($first)
                                                {{$basic_ability->label}} ({{$basic_specialization->name}})
                                                {{$first = false}}
                                            @else
                                                , {{$basic_ability->label}} ({{$basic_specialization->name}})
                                            @endif
                                            
                                        @endforeach
                                    @else
                                        @if($first)
                                            {{$basic_ability->label}}
                                            {{$first = false}}
                                        @else
                                            , {{$basic_ability->label}}
                                        @endif
                                    @endif
                                @endforeach
                                </td>
                            </tr>
                        @endforeach
                    </tr>
                @endforeach
            </table>
        </div>
    </div>
</div>
@endsection