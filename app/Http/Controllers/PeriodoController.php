<?php

namespace App\Http\Controllers;

use App\Models\Periodo;
use Illuminate\Http\Request;

class PeriodoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $periodos = Periodo::all();
        return view('parametros.periodos.index', ['periodos' => $periodos]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('parametros.periodos.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:255|unique:periodos,nombre',
        ]);

        Periodo::create($request->only('nombre'));
        return redirect()->route('parametros.periodos.index')->with('success', 'Período creado exitosamente.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Periodo $periodo)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Periodo $periodo)
    {
        return view('parametros.periodos.edit', ['periodo' => $periodo]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Periodo $periodo)
    {
        $request->validate([
            'nombre' => 'required|string|max:255|unique:periodos,nombre,' . $periodo->id,]);
    
        $periodo->update($request->only('nombre'));
    
        return redirect()->route('parametros.periodos.index')->with('success', 'Período actualizado exitosamente.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Periodo $periodo)
    {
        $periodo->delete();
        return redirect()->route('parametros.periodos.index')->with('success', 'Período eliminado exitosamente.');
    }
}
