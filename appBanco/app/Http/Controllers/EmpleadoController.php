<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;

class EmpleadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $empleados = Empleado::all();
        return view('empleado.index')->with('empleados', $empleados);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('empleado.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $empleado = new Empleado();
        $empleado->codempleado=$request->get('codigoEmpleado');
        $empleado->nombre=$request->get('nombreEmpleado');
        $empleado->apellido=$request->get('apellidoEmpleado');
        $empleado->nivel=$request->get('nivelEmpleado');
        $empleado->telefono=$request->get('telefonoEmpleado');
        $empleado->save();

        return redirect('/empleado');

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $eliminar = Empleado::find($id);
        return view('empleado.delete')->with('eliminar', $eliminar);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $editar_empleado = Empleado::find($id);
        return view("empleado.edit")->with('empleado', $editar_empleado);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $edit_empleado = Empleado::find($id);
        $edit_empleado->codempleado=$request->get('codigoEmpleado');
        $edit_empleado->nombre=$request->get('nombreEmpleado');
        $edit_empleado->apellido=$request->get('apellidoEmpleado');
        $edit_empleado->nivel=$request->get('nivelEmpleado');
        $edit_empleado->telefono=$request->get('telefonoEmpleado');
        $edit_empleado->save();

        return redirect('/empleado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminar_empleado = Empleado::find($id);
        $eliminar_empleado->delete();
        return redirect('/empleado');
    }
}
