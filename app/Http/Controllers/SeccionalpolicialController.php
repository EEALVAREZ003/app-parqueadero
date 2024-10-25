<?php

namespace App\Http\Controllers;

use app\http\Controllers\Controllers;
use Illuminate\Http\Request;
use App\Models\seccionalpolicial;

class SeccionalpolicialController extends Controller
{
    //
    public function save (request $request){

        $seccional=seccionalpolicial::create([
            'nombre'=>$request->nombre,
            'id_direccion'=>$request->id_direccion,

        ]);

        return response()->json([
            'status'=> '200',
            'message'=> 'guardado con exito',
            'dato'=> $seccional
        ]);
    }

    public function getdata (request $request){
    
        $seccional=seccionalpolicial:: all();
    
        return response()->json([
            'status'=> '300',
            'message'=> 'data...',
            'resultado'=>$seccional        ]);
    }

    public function update (request $request){
        return response()->json([
            'status'=> '200',
            'message'=> 'guardado con exito'
        ]);
    }    

    public function delete (request $request){

        $seccional = seccionalpolicial::findOrFail ($request->id);

        $seccional-> delete ();


        return response()->json([
            'status'=> '200',
            'message'=> 'borrado con exito'
        ]);
    }
}
