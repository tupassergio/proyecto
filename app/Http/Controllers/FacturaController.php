<?php

namespace App\Http\Controllers;

use App\Models\Factura;
use Illuminate\Http\Request;

class FacturaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $facturas = Factura::all();
        return view('facturas.index',['facturas' => $facturas]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('facturas.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nofactura'=> 'required|max:50',
            'nombre'=> 'required|max:50',
            'nit'=> 'required|max:50',
            'descripcion'=> 'required|max:50',
            'cantidad'=> 'required|max:50',
            'total'=> 'required|max:50',
                        
        ]);

        $facturas = new Factura();
        $facturas->nofactura = $request->input('nofactura');
        $facturas->nombre = $request->input('nombre');
        $facturas->nit = $request->input('nit');
        $facturas->descripcion = $request->input('descripcion');
        $facturas->cantidad = $request->input('cantidad');
        $facturas->total = $request->input('total');
        $facturas->save();

        return view ("facturas.message", ['msg' => "Registro Guardado"]); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Factura $factura)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $factura = Factura::find($id);
         return view('facturas.edit', ['factura' => $factura]); 
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Factura $factura)
    {
        $request->validate([
            'nofactura'=> 'required|max:50',
            'nombre'=> 'required|max:50',
            'nit'=> 'required|max:50',
            'descripcion'=> 'required|max:50',
            'cantidad'=> 'required|max:50',
            'total'=> 'required|max:50',
            
        ]);

        $usuarios = Factura::find($id);
        $usuarios->nofactura = $request->input('nofactura');
        $usuarios->nombre = $request->input('nombre');
        $usuarios->nit = $request->input('nit');
        $usuarios->descripcion = $request->input('descripcion');
        $usuarios->cantidad = $request->input('cantidad');
        $usuarios->total = $request->input('total');
        $usuarios->save();

        return view ("facturas.message", ['msg' => "Registro Guardado"]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $facturas = Factura::find($id);
       $facturas->delete();

       return redirect("facturas");
    }
}
