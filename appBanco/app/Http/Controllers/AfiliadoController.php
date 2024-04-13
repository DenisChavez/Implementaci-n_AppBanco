<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Afiliado;
use App\Models\Empleado;

class AfiliadoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $afiliados = Afiliado::all();
        return view('afiliado.index')->with('afiliados', $afiliados);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view("afiliado.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $afiliado = new Afiliado();
        $afiliado->codafiliado=$request->get('codafiliado');
        $afiliado->nombre=$request->get('nombreafiliado');
        $afiliado->apellido=$request->get('apellidoafiliado');
        $afiliado->ciudad=$request->get('ciudadafiliado');
        $afiliado->telefono=$request->get('telefonoafiliado');
        $afiliado->edad=$request->get('edadafiliado');
        $afiliado->save();

        return redirect('/afiliado');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $afiliados = Afiliado::all();
        $empleados = Empleado::find($id);
        return view('afiliado.index2')->with('empleado', $empleados)->with('afiliados', $afiliados);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
        $editar = Afiliado::find($id);
        return view('afiliado.edit_afiliado')->with('editar_afiliado', $editar);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $editar_afiliado = Afiliado::find($id);
        $editar_afiliado->codafiliado=$request->get('codigoAfiliado');
        $editar_afiliado->nombre=$request->get('nombreAfiliado');
        $editar_afiliado->apellido=$request->get('apellidoAfiliado');
        $editar_afiliado->ciudad=$request->get('ciudadAfiliado');
        $editar_afiliado->telefono=$request->get('telefonoAfiliado');
        $editar_afiliado->edad=$request->get('edadAfiliado');
        $editar_afiliado->save();

        return redirect('/afiliado');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $eliminar = Afiliado::find($id);
        $eliminar->delete();
        return redirect('/afiliado');
    }
}
