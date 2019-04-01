@extends('layout')

@section('content')
    <div class="d-flex flex-column">
    <div class="d-flex"><a href="{{ route('download', ['year'=>$year, 'month' => $month]) }}">Descargar</a></div>
    <div class="d-flex">Valores de la U.F. para el mes seleccionado</div>
        <div class="d-flex flex-column">
            @for($i = 0; $i < count($ufs); $i++)
                <div class="d-flex flex-column mt-3" style="border: 1px solid #DDD; padding:5px;border-radius: 5px;">
                    <div class="d-flex">Día: {{ $ufs[$i]->Fecha }}</div>
                    <div class="d-flex">
                        Valor: {{ $ufs[$i]->Valor }}
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection