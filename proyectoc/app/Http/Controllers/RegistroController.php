<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Registro;
use App\Models\Auto;
use App\Models\Cliente;
class registroController extends Controller
{
    public function indexAll()
    {
        $registro = Registro::all();
        return response()->json($registro);
    }



    public function indexVisible()
    {
        $registro = Registro::all()->where('visible','==',true);
        return response()->json($registro);
    }

    
  
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'fecha' => ['required'],
            'dias' => ['required'],
            'Auto_id' => ['required'],
            'Cliente_id' => ['required'],
        ]);
        $registro = new Registro();
        $registro->fecha= $validatedData->fecha;
        $registro->dias= $validatedData->dias;
        $registro->visible= true;
        $registro->Auto_id= $validatedData->Auto_id;
        $registro->Cliente_id= $validatedData->Cliente_id;
        $registro->save();
        return response()->jason([
            "message"=> "Se ha creado registro.",
            "id"=> $registro->id
        ],202);
    }





    
    public function show($id)
    {
        $registro = Registro::find($id);

        if ($registro == NULL or ($registro->visible ==  false)){
            return "No se ha encontrado el registro.";
        }

        return $registro;
    }

   
  

   
    public function update(Request $request, $id)
    {
        $registro = Registro::findOrFail($id);

        if ($registro == NULL or ($registro->visible ==  false)){
            return "No se ha encontrado el registro.";
        }

        if ($request->get('fecha') != NULL){
            $registro->fecha = $request->get('fecha');
        }

        if ($request->get('dias') != NULL){
            $registro->dias = $request->get('dias');
        }

        if ($request->get('Auto_id') != NULL){
            $registro->Auto_id = $request->get('Auto_id');
        }

        if ($request->get('Cliente_id') != NULL){
            $registro->Cliente_id = $request->get('Cliente_id');
        }

        if ($request->get('visible') != NULL){
            $registro->visible = $request->get('visible');
        }
        
        $registro->save();

        return response()->json($registro);
    }

    
    public function deleteData($id)
    {
        $registro = Registro::find($id);
        if($registro == NULL){
            return "No se ha encontrado el registro.";
        }
        $registro->delete();
        return "El registro ha sido eliminado";
    }

    //metodo delete que simula el borrado de una tupla mediante el cambio de visibilidad a false
    public function deleteVisibility($id)
    {
       $registro = Registro::find($id);
       if($registro == NULL){
            return "No se ha eliminado registro.";
        }
       $registro->visible = false;
       $registro->save();
       return "El registro ha sido eliminado.";
    } 
}
