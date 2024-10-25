<?php

namespace App\Http\Controllers;

use app\http\Controllers\Controllers;
use Illuminate\Http\Request;
use App\Models\direccionpolicial;


class DireccionpolicialController extends Controller
{
    //
    public function save (request $request){

        //$direccion=direccionpolicial::create([
       //   'nombre'=>$request->nombre,
       // ]);
      // $direccion=new direccionpolicial();
      //  $direccion->nombre=$request->nombre;
       // $direccion->save();

       $direccion=direccionpolicial::create([
        'nombre'=>$request->nombre,

       ]);


        return response()->json([
            'status'=> '200',
            'message'=> 'guardado con exito',
            'dato'=> $request->nombre
        ]);
    }

    public function getdata (request $request){

        $direccion=direccionpolicial:: all();

        return response()->json([
            'status'=> '300',
            'message'=> 'data...',
            'resultado'=>$direccion
        ]);
    }

    public function update (request $request){

        $direccion=direccionpolicial::findOrFail($request->id);

        $direccion-> update([
            'nombre'=>$request->nombre,
        ]);
        

        return response()->json([
            'status'=> '200',
            'message'=> 'actualizado con exito'
        ]);
    }    

    public function delete (request $request){

        //$direccion = direccionpolicial::findOrFail ($request->id);

        //$direccion-> delete ();

        $direccion = direccionpolicial::findOrFail ($request->id);

        $direccion-> delete ();


        return response()->json([
            'status'=> '200',
            'message'=> 'borrado con exito'
        ]);
    }
}
