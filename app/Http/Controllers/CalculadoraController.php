<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @param  \Illuminate\Http\Request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        // dd($request->solucion);
        $solucion = "0";
        // return view('calculadora' , ['solucion'=>$solucion]);
        $dato = $request;
        // return "Hola";
        // 
        if($dato->operador === "+"){
         $solucion = $dato->operador1 + $dato->operador2;
        }else if($dato->operador === "-"){
            $solucion = $dato->operador1 - $dato->operador2;
           }

        return view('calculadora' , ['solucion'=>$solucion]);
        
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $dato = $request;
        // return "Hola";
        // 
        if($dato->operador === "+"){
         $solucion = $dato->operador1 + $dato->operador2;
        }else if($dato->operador === "-"){
            $solucion = $dato->operador1 - $dato->operador2;
           }

        return view('calculadora' , ['solucion'=>$solucion]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
