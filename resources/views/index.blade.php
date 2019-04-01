@extends('layout')

@section('content')

<div class="mb-4">Aquí puede obtener el valor del indicador UF</div>
    <form action="{{ route('uf') }}" method="post">
    @csrf()
    <div class="d-flex flex-column">
        <div class="d-flex">
            <div class="form-group">
                <label for="">Fecha a consultar</label>
                <div>
                    <select name="year" id="">
                        @foreach($years as $k => $year)
                            <option value="{{ $year }}">{{ $year }}</option>
                        @endforeach
                    </select>
                    <select name="month" id="">
                        @foreach($months as $k => $month)
                            <option value="{{ ($k + 1) }}">{{ $month }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="d-flex">
        <button class="btn btn-primary">Consultar</button>
        </div>
    </div>
</form>
@endsection