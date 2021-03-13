<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pais;
class paisController extends Controller
{
    public function indexAll()
    {
        $pais = Pais::all();
        return response()->json($pais);
    }



    public function indexVisible()
    {
        $pais = Pais::all()->where('visible','==',true);
        return response()->json($pais);
    }

    
  
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => ['required'],
        ]);
        $pais = new Pais();
        $pais->nombre= $validatedData->nombre;
        $cliente->visible= true;
        $pais->save();
        return response()->jason([
            "message"=> "Se ha creado pais.",
            "id"=> $pais->id
        ],202);
    }





    
    public function show($id)
    {
        $pais = Pais::find($id);

        if ($pais == NULL or ($pais->visible ==  false)){
            return "No se ha encontrado el pais.";
        }

        return $pais;
    }

   
  

   
    public function update(Request $request, $id)
    {
        $pais = Pais::findOrFail($id);

        if ($pais == NULL or ($pais->visible ==  false)){
            return "No se ha encontrado el pais.";
        }

        if ($request->get('nombre') != NULL){
            $pais->nombre = $request->get('nombre');
        }

       

        if ($request->get('visible') != NULL){
            $pais->visible = $request->get('visible');
        }
        
        $pais->save();

        return response()->json($pais);
    }

    
    public function deleteData($id)
    {
        $pais = Pais::find($id);
        if($pais == NULL){
            return "No se ha encontrado el pais.";
        }
        $pais->delete();
        return "El pais ha sido eliminado";
    }

    //metodo delete que simula el borrado de una tupla mediante el cambio de visibilidad a false
    public function deleteVisibility($id)
    {
       $pais = Pais::find($id);
       if($pais == NULL){
            return "No se ha eliminado pais.";
        }
       $pais->visible = false;
       $pais->save();
       return "El pais ha sido eliminado.";
    } 
}
