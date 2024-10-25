<?php

namespace App\Http\Controllers;

use app\http\Controllers\Controllers;
use Illuminate\Http\Request;
use App\Models\externo;

class ExternoController extends Controller
{
    //
    public function save (request $request){

        $externo=externo::create([
            'puesto'=>$request->puesto,
        ]);

        return response()->json([
            'status'=> '200',
            'message'=> 'guardado con exito',
            'dato'=> $request->puesto
        ]);
    }

    public function getdata (request $request){

        $externo=externo:: all();

        return response()->json([
            'status'=> '300',
            'message'=> 'data...',
            'resultado'=>$externo
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
