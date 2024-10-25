<?php

namespace App\Http\Controllers;

use app\http\Controllers\Controllers;
use Illuminate\Http\Request;
use App\Models\clasevehiculo;

class ClasevehiculoController extends Controller
{
    //    
    public function save (request $request){
        $clase=clasevehiculo::create ([
            'marca'=>$request->marca
       ] )
    ;



        return response()->json([
            'status'=> '200',
            'message'=> 'guardado con exito',
            'dato'=> $request->marca
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