@extends('layouts.principal')

@section('hijos')

<h1>Editar Afiliado</h1>
<div class="container">
    <div class="row">
        <div class="col">
            <form action="{{route('afiliado.update', ['id' => $editar_afiliado->id])}}" method="GET">
                @csrf 
                @method('PUT')
                <div class="mb-3">
                    <label for="codAfiliado">Código Afiliado</label>
                    <input type="text" name="codigoAfiliado" id="codAfiliado" value="{{$editar_afiliado->codafiliado}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="nombre_Afiliado">Nombre</label>
                    <input type="text" name="nombreAfiliado" id="nombre_Afiliado" value="{{$editar_afiliado->nombre}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="apellido_Afiliado">Apellido</label>
                    <input type="text" name="apellidoAfiliado" id="apellido_empleado" value="{{$editar_afiliado->apellido}}" class="form-control">
                </div>

                 <div class="mb-3">
                    <label for="ciudad_Afiliado">Ciudad</label>
                    <input type="text" name="ciudadAfiliado" id="ciudad_Afiliado" value="{{$editar_afiliado->ciudad}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="telefono">Teléfono</label>
                    <input type="text" name="telefonoAfiliado" id="telefono" value="{{$editar_afiliado->telefono}}" class="form-control">
                </div>

                <div class="mb-3">
                    <label for="edad">Edad</label>
                    <input type="text" name="edadAfiliado" id="edad" value="{{$editar_afiliado->edad}}" class="form-control">
                </div>
                <button type="submit" class="btn btn-info">Editar</button>
            </form>
        </div>
    </div>
</div>

@endsection('hijos')