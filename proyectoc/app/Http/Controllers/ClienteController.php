<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Pais;
use App\Models\Cliente;
class clienteController extends Controller
{
    public function indexAll()
    {
        $cliente = Cliente::all();
        return response()->json($cliente);
    }



    public function indexVisible()
    {
        $cliente = Cliente::all()->where('visible','==',true);
        return response()->json($cliente);
    }

    
  
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nombre' => ['required'],
            'mail' => ['required'],
            'edad' => ['required'],
            'Pais_id' => ['required'],
        ]);
        $cliente = new Cliente();
        $cliente->nombre= $validatedData->nombre;
        $cliente->mail= $validatedData->mail;
        $cliente->edad= $validatedData->edad;
        $cliente->visible= true;
        $cliente->Pais_id= $validatedData->Pais_id;
        $cliente->save();
        return response()->jason([
            "message"=> "Se ha creado cliente.",
            "id"=> $cliente->id
        ],202);
    }





    
    public function show($id)
    {
        $cliente = Cliente::find($id);

        if ($cliente == NULL or ($cliente->visible ==  false)){
            return "No se ha encontrado el cliente.";
        }

        return $cliente;
    }

   
  

   
    public function update(Request $request, $id)
    {
        $cliente = Cliente::findOrFail($id);

        if ($cliente == NULL or ($cliente->visible ==  false)){
            return "No se ha encontrado el cliente.";
        }

        if ($request->get('nombre') != NULL){
            $cliente->nombre = $request->get('nombre');
        }

        if ($request->get('mail') != NULL){
            $cliente->mail = $request->get('mail');
        }

        if ($request->get('edad') != NULL){
            $cliente->edad = $request->get('edad');
        }

        if ($request->get('visible') != NULL){
            $cliente->visible = $request->get('visible');
        }
        
        $cliente->save();

        return response()->json($cliente);
    }

    
    public function deleteData($id)
    {
        $cliente = Cliente::find($id);
        if($cliente == NULL){
            return "No se ha encontrado el cliente.";
        }
        $cliente->delete();
        return "El cliente ha sido eliminado";
    }

    //metodo delete que simula el borrado de una tupla mediante el cambio de visibilidad a false
    public function deleteVisibility($id)
    {
       $cliente = Cliente::find($id);
       if($cliente == NULL){
            return "No se ha eliminado cliente.";
        }
       $cliente->visible = false;
       $cliente->save();
       return "El cliente ha sido eliminado.";
    } 
}
