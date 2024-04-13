@extends('layouts.principal')

@section('hijos')
<h1>Crear Afiliado</h1>

<div class="container">
    <div class="row">
        <div class="col">
            <form action="/afiliado" method="POST">
                @csrf 
                <div class="mb-3">
                    <label for="cod_Afiliado">Codigo Afiliado</label>
                    <input class="form-control" type="text" name="codafiliado" id="cod_Afiliado">
                </div>

                <div class="mb-3">
                    <label for="nombre_afiliado">Nombre</label>
                    <input class="form-control" type="text" name="nombreafiliado" id="nombre_afiliado">
                </div>

                <div class="mb-3">
                    <label for="apellido_afiliado">Apellido</label>
                    <input class="form-control" type="text" name="apellidoafiliado" id="apellido_afiliado">
                </div>

                 <div class="mb-3">
                    <label for="ciudad_afiliado">Ciudad</label>
                    <input class="form-control" type="text" name="ciudadafiliado" id="ciudad_afiliado">
                </div>

                <div class="mb-3">
                    <label for="telefono">Teléfono</label>
                    <input class="form-control" type="text" name="telefonoafiliado" id="telefono">
                </div>

                <div class="mb-3">
                    <label for="edad">Edad</label>
                    <input class="form-control" type="text" name="edadafiliado" id="edad">
                </div>
                <button type="submit" class="btn btn-success">Guardar</button>
            </form>
        </div>
    </div>
</div>

@endsection('hijos')