<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Deposito;
use App\Models\Afiliado;
use App\Models\Empleado;

class DepositoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $depositos = Deposito::all();
        return view('depositos.index')->with('deposito', $depositos);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(string $id, string $id2)
    {
        //
        return view('depositos.create')->with('id', $id)->with('id2', $id2);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, string $id, string $id2)
    {
        //
        $deposito = new Deposito();
        $deposito->codempleado=$request->get('codEmpleado');
        $deposito->codafiliado=$request->get('codAfiliado');
        $deposito->fecha=$request->get('fecha');
        $deposito->monto=$request->get('monto');
        $deposito->save();

        $deposito = Deposito::all();

        return view('depositos.index')->with('depositos', $deposito)->with('afiliado', $request->get('codAfiliado'));

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id, string $id2)
    {
        //
        $deposito = Deposito::all();
        $afiliado = Afiliado::find($id);
        $empleado = Empleado::find($id2);
        return view('depositos.index2')->with('depositos', $deposito)->with('afiliado', $afiliado)->with('empleado', $empleado);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
