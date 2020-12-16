<?php

namespace App\Http\Controllers;

use App\producto;
use Illuminate\Http\Request;

class ProductoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $proveedores = \DB::table('proveedores')
                        ->select('proveedores.*')
                        ->get();
        $productos = \DB::table('productos')
                        ->select('productos.*')
                        ->orderBy('id','DESC')
                        ->get();
        return view('misproductos')->with('productos',$productos)->with('proveedores',$proveedores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $dato = new \App\producto;

        //obtener imagen
        $imagen = $request->file('imagenproducto');

        //obtener nombre de la imagen
        $nombreimagen = $imagen->getClientOriginalName();

        $imagen->move('productos', $imagen->getClientOriginalName());

        $dato->id_proveedor = $request->idprov;
        $dato->id_establecimiento = "1";
        $dato->nombre = $request->nombre;
        $dato->costo = $request->costo;
        $dato->precioPublico = $request->precioPublico;
        $dato->foto = $nombreimagen;
        $dato->descripcion = $request->descripcion;
        $dato->cantidad = $request->cantidad;
        $dato->estado = "activo";

        if($dato->save()){
            return back()->with('respuesta', 'Producto registrado');
        }else{
            return back()->with('respuestaerror', 'Error al registrar, intente una vez más');
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function show(producto $producto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function edit(producto $producto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, producto $producto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\producto  $producto
     * @return \Illuminate\Http\Response
     */
    public function destroy(producto $producto)
    {
        //
    }
}
