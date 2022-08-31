<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Bootcamp;
use Illuminate\Support\Facades\Validator;
use App\Http\Requests\StoreBootcampRequest;

class BootcampController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       //metodo json trasmite response en formato parametros: datos a transitir y el codigo http de la respuesta
       return response()->json(["succes" => true ,
                               "data" => bootcamp::all()
                            ], 200);  
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreBootcampRequest $request)
    {
      //1. traer el payload
      //$datos=$request->all();
      //2. crear el nuevo bootcamp
      return response()->json([
        "succes" => true, "data" =>  Bootcamp::create($request->all()) 
      ],201
    );
      //return $newBootcamp;
     // return "bootcamp creado";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return response()->json(
            ["succes" => true, "data" => bootcamp::find($id)], 200
        );
        // Bootcamp::find($id);
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
      $b=Bootcamp::find($id);
      $b->update($request->all());
        return response()->json([
            "succes" => true, "data" =>$b 
          ],200
        );
      
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
      $b = Bootcamp::find($id);
      $b->delete();
        return response()->json([
            "succes" => true, "data" => $b 
          ],200
        );
       
    }
}
