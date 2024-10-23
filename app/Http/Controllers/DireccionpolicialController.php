<?php

namespace App\Http\Controllers;

use app\http\Controllers\Controllers;
use Illuminate\Http\Request;
use app\Models\direccionpolicial;

class DireccionpolicialController extends Controller
{
    //
    public function save (request $request){
       // $direccion=direccionpolicial::create([
        //    'nombre'=>$request->nombre,
        //]);

        $direccion = new direccionpolicial();

        $direccion->nombre=$request->nombre;
        $direccion->save();





        return response()->json([
            'status'=> '200',
            'message'=> 'guardado con exito',
            'dato'=> $request->nombre
        ]);
    }

    public function getdata (request $request){
        $rta=10+20;
        return response()->json([
            'status'=> '300',
            'message'=> 'data...',
            'resultado'=>$rta
        ]);
    }

    public function update (request $request){
        return response()->json([
            'status'=> '200',
            'message'=> 'guardado con exito'
        ]);
    }    

    public function delete (request $request){
        return response()->json([
            'status'=> '200',
            'message'=> 'borrado con exito'
        ]);
    }
}
