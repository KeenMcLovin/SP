<?php

namespace App\Http\Controllers;

use App\proveedor;
use Illuminate\Http\Request;

class ProveedorController extends Controller
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
                        ->orderBy('id','DESC')
                        ->get();
        return view('misproveedores')->with('proveedores',$proveedores);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $dato = new \App\proveedor;
        $dato->id_establecimiento = "1";
        $dato->nombre = $request->nombre;
        $dato->apaterno = $request->apaterno;
        $dato->contacto = $request->contacto;
        $dato->direccion = $request->direccion;
        $dato->estado = "activo";

        if($dato->save()){
            return back()->with('respuesta', 'Proveedor registrado');
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
     * @param  \App\proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function show(proveedor $proveedor)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function edit(proveedor $proveedor)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, proveedor $proveedor)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\proveedor  $proveedor
     * @return \Illuminate\Http\Response
     */
    public function destroy(proveedor $proveedor)
    {
        //
    }
}
