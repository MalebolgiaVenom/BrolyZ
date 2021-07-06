@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">

@foreach ($mensajes as $dato)
            <div class="card">

                <div class="card-header">Mensaje de {{$dato->nombre}}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{$dato->texto}}
                </div>
            </div>

@endforeach

        </div>
    </div>
</div>
@endsection
