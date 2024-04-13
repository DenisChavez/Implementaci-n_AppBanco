@extends('layouts.principal')

@section('hijos')
<h1>Empleado : {{$empleado->nombre}} {{$empleado->apellido}}</h1>
<h1>Modulo de Depósitos Afiliados : {{$afiliado->id}} {{$afiliado->nombre}} {{$afiliado->apellido}}</h1>

<a href="/deposito/create/{{$empleado->id}}/{{$afiliado->id}}" class="btn btn-info">Realizar Depósito</a>
<table class="table">
    <thead>
        <tr>
            <th>ID</th>
            <th>Código Empleado</th>
            <th>Código Afiliado</th>
            <th>Fecha</th>
            <th>Monto</th>
        </tr>
    </thead>

    <tbody>
        @foreach($depositos as $deposito)
        @if($deposito->codafiliado == $afiliado->id)
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