@extends('layouts.principal')

@section('hijos')
<h1>Crear Retiro</h1>


<div class="container">
    <div class="row">
        <div class="col">
            <form action="/retiro/store/{{$id}}/{{$id2}}" method="GET">
                @csrf 
                @method('PUT')
                <div class="mb-3">
                    <label for="codEmpleado">Código Empleado</label>
                    <input class="form-control" type="text" name="codEmpleado" id="codEmpleado" value="{{$id}}">
                </div>

                <div class="mb-3">
                    <label for="codAfiliado">Código Afiliado</label>
                    <input class="form-control" type="text" name="codAfiliado" id="codAfiliado" value="{{$id2}}">
                </div>

                <div class="mb-3">
                    <label for="fecha">Fecha</label>
                    <input class="form-control" type="text" name="fecha" id="fecha">
                </div>

                 <div class="mb-3">
                    <label for="monto">Monto</label>
                    <input class="form-control" type="text" name="monto" id="monto">
                </div>
                <button type="submit" class="btn btn-success">Guardar</button>
            </form>
        </div>
    </div>
</div>

@endsection('hijos')