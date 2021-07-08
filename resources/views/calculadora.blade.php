@extends('layouts.app')

@section('content')
<div class="content ">
    <div class="row ">
        <div class="col-8">
            <form method="get" action="{{route('calculadora.index')}}">
                <input type="text" class="border border-primary" name="dato1" required>
                <select name="operador" class="border border-danger">
                    <option value="+">+
                    </option>
                    <option value="-">-
                    </option>
                    <option value="x">x
                    </option>
                    <option value="/">/
                    </option>
                </select>
                <input type="text" class="border border-primary" name="dato2" required>
                <input type="text" class="border border-primary" name="solucion" value="{{$solucion}}" required>


                <input type="submit" class="btn btn-primary" value="Resultados">

            </form>
        </div>
    </div>
</div>
</div>

@endsection
