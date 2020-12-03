<?php

namespace App\Http\Controllers;

use App\cliente;
use Illuminate\Http\Request;

class ClienteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return redirect('inicio');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request){
        $dato = new \App\cliente;   
        $dato->nombre = $request->nombre;
        $dato->apaterno = $request->apaterno;
        $dato->contacto = $request->telefono;
        $dato->usuario = $request->usuario;
        $dato->contraseña = $request->contraseña;

        if($dato->save()){
            return back()->with('respuesta', 'Usuario registrado');
        }else{
            return back()->with('respuesta', 'Error al registrar, intente una vez más');
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function show(cliente $cliente)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, cliente $id)
    {
        $id->update($request->all());
        return response()->json($id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\cliente  $cliente
     * @return \Illuminate\Http\Response
     */
    public function destroy(cliente $id)
    {
        Practica::destroy($id);
        return 'Registro eliminado';
    }
}
