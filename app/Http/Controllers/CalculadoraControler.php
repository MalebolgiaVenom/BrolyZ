<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculadoraControler extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        //  dd($request->operador);
        $solucion = "0";
         // return view('calculadora' , ['solucion'=>$solucion]);
         // $dato = $request;
         // return "Hola";
         // 
         if($request->operador == "+"){
            $solucion = $request->dato1 + $request->dato2;
            return view('calculadora' , ['solucion'=>$solucion]);
         }else if($request->operador == "-"){
            $solucion = $request->dato1 - $request->dato2;
            return view('calculadora' , ['solucion'=>$solucion]);
         }else if($request->operador == "x"){
            $solucion = $request->dato1 + $request->dato2;
            return view('calculadora' , ['solucion'=>$solucion]);
         }else{
            $solucion = $request->dato1 - $request->dato2;
            return view('calculadora' , ['solucion'=>$solucion]);
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
        //
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
