<?php

namespace App\Http\Controllers;

use App\Models\ProductoInvestigativo;
use App\Models\GrupoInvestigacion;
use Illuminate\Http\Request;

class ProductoInvestigativoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Obtener todos los grupos con sus productos y usuarios
        $grupos = GrupoInvestigacion::with('productosInvestigativos.usuario', 'productosInvestigativos.subTipoProducto')->get();

        return view('productos-investigativos.index', compact('grupos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ProductoInvestigativo $productos_investigativo)
    {
        
        // Obtener el producto con sus relaciones
        $productos_investigativo->load([
            'usuario',
            'grupoInvestigacion',
            'subTipoProducto',
            'entregas'
        ]);
    
        return view('productos-investigativos.show', compact('productos_investigativo'));
        // return $productos_investigativo;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ProductoInvestigativo $productoInvestigativo)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ProductoInvestigativo $productoInvestigativo)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ProductoInvestigativo $productoInvestigativo)
    {
        //
    }
}
