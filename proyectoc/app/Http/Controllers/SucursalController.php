<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Sucursal;
class sucursalController extends Controller
{
    public function indexAll()
    {
        $sucursal = Sucursal::all();
        return response()->json($sucursal);
    }



    public function indexVisible()
    {
        $sucursal = Sucursal::all()->where('visible','==',true);
        return response()->json($sucursal);
    }

    
  
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => ['required'],
        ]);
        $sucursal = new Sucursal();
        $sucursal->nombre= $validatedData->nombre;
        $cliente->visible= true;
        $sucursal->save();
        return response()->jason([
            "message"=> "Se ha creado sucursal.",
            "id"=> $sucursal->id
        ],202);
    }




    
    public function show($id)
    {
        $sucursal = Sucursal::find($id);

        if ($sucursal == NULL or ($sucursal->visible ==  false)){
            return "No se ha encontrado la sucursal.";
        }

        return $sucursal;
    }

   
  

   
    public function update(Request $request, $id)
    {
        $sucursal = Sucursal::findOrFail($id);

        if ($sucursal == NULL or ($sucursal->visible ==  false)){
            return "No se ha encontrado la sucursal.";
        }

        if ($request->get('nombre') != NULL){
            $sucursal->nombre = $request->get('nombre');
        }

       

        if ($request->get('visible') != NULL){
            $sucursal->visible = $request->get('visible');
        }
        
        $sucursal->save();

        return response()->json($sucursal);
    }

    
    public function deleteData($id)
    {
        $sucursal = Sucursal::find($id);
        if($sucursal == NULL){
            return "No se ha encontrado la sucursal.";
        }
        $sucursal->delete();
        return "La sucursal ha sido eliminada";
    }

    //metodo delete que simula el borrado de una tupla mediante el cambio de visibilidad a false
    public function deleteVisibility($id)
    {
       $sucursal = Sucursal::find($id);
       if($sucursal == NULL){
            return "No se ha eliminado sucursal.";
        }
       $sucursal->visible = false;
       $sucursal->save();
       return "La sucursal ha sido eliminada.";
    } 
}
