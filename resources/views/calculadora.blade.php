@extends('layouts.app')

@section('content')
<div class="content ">
    <div class="row ">
        <div class="col-8">
            <form method="get" action="{{route('calculadora.index')}}">
            @csrf 
                <input type="text" class="border border-primary" name="operando1">
                <select name="operador" class="border border-danger">
                    <option value="+">+
                    </option>
                    <option value="-">-
                    </option>
                    <option value="">
                    </option>
                    <option value="/">/
                    </option>
                </select>
                <input type="text" class="border border-primary" name="operando2">
                <input type="submit" class="btn btn-primary" value="Resultados">
            </form>
            <div>
            <h1>Resultados:{{$solucion}}</h1>
            </div>
        </div>
    </div>
</div>
</div>

@endsection
