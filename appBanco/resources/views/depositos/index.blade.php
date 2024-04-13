@extends('layouts.principal')

@section('hijos')
<h1>Transacciones Realizadas (Depósito) - Afiliado: {{$afiliado}}</h1>

<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Codigo Empleado</th>
            <th>Codigo Afiliado</th>
            <th>Fecha</th>
            <th>Monto</th>
        </tr>
    </thead>

    <tbody>
        @foreach($depositos as $deposito)
        @if($deposito->codafiliado == $afiliado)
        <tr>
            <th>{{$deposito->id}}</th>
            <th>{{$deposito->codempleado}}</th>
            <th>{{$deposito->codafiliado}}</th>
            <th>{{$deposito->fecha}}</th>
            <th>{{$deposito->monto}}</th>
        </tr>         
        @endif   
        @endforeach
    </tbody>
</table>

@endsection