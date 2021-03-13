<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Sucursal;
use App\Models\Auto;
class autoController extends Controller
{
    public function indexAll()
    {
        $auto = Auto::all();
        return response()->json($auto);
    }



    public function indexVisible()
    {
        $auto = Auto::all()->where('visible','==',true);
        return response()->json($auto);
    }

    
  
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'color' => ['required'],
            'patente' => ['required'],
            'ano' => ['required'],
            'modelo' => ['required'],
            'valor' => ['required'],
            'disponible' => ['required'],
            'veces_rentado' => ['required'],
            'Sucursal_id' => ['required'],
        ]);
        $auto = new Auto();
        $auto->color= $validatedData->color;
        $auto->patente= $validatedData->patente;
        $auto->ano= $validatedData->ano;
        $auto->modelo= $validatedData->modelo;
        $auto->valor= $validatedData->valor;
        $auto->disponible= $validatedData->disponible;
        $auto->veces_rentado= $validatedData->veces_rentado;
        $auto->visible= true;
        $auto->Sucursal_id= $validatedData->Sucursal_id;
        $auto->save();
        return response()->jason([
            "message"=> "Se ha creado auto.",
            "id"=> $auto->id
        ],202);
    }

    public function storeV(Request $request){
        $auto = new Auto();
        $auto->color= $request->colorA;
        $auto->patente= $request->patenteA;
        $auto->ano= $request->anoA;
        $auto->modelo= $request->modeloA;
        $auto->valor= $request->valorA;
        $auto->disponible= true;
        $auto->veces_rentado= $request->rentadoA;
        $auto->visible= true;
        $auto->sucursal_id= $request->sucursalA;
        $auto->save();
        return view('/exitoso');
    }

    //foreach($auto as $auto){
    //    echo $auto->color;
    //}response()->json($auto);
    public function filtrados(Request $request){
        $valor=$request->valor;
        $auto= Auto::all()->where('sucursal_id', "==", $valor)->where('visible', "==", true);//->where('disponible', "==", true);
        
        
        return view('/inicioBusqueda',compact('auto'));
        //redirect()->route('/inicioBusqueda');

    }

    public function detalle($id){
        $auto=Auto::find($id);
        return view('/detalle',compact('auto'));
    }


    
    public function show($id)
    {
        $auto = Auto::find($id);

        if ($auto == NULL or ($auto->visible ==  false)){
            return "No se ha encontrado el auto.";
        }

        return $auto;
    }

   
  

   
    public function update(Request $request, $id)
    {
        $auto = Auto::findOrFail($id);

        if ($auto == NULL or ($auto->visible ==  false)){
            return "No se ha encontrado el auto.";
        }

        if ($request->get('color') != NULL){
            $auto->color = $request->get('color');
        }

        if ($request->get('patente') != NULL){
            $auto->patente = $request->get('patente');
        }

        if ($request->get('ano') != NULL){
            $auto->ano = $request->get('ano');
        }

        if ($request->get('modelo') != NULL){
            $auto->modelo = $request->get('modelo');
        }

        if ($request->get('valor') != NULL){
            $auto->valor = $request->get('valor');
        }

        if ($request->get('disponible') != NULL){
            $auto->disponible = $request->get('disponible');
        }

        if ($request->get('veces_rentado') != NULL){
            $auto->veces_rentado = $request->get('veces_rentado');
        }

        if ($request->get('visible') != NULL){
            $auto->visible = $request->get('visible');
        }
        
        $auto->save();

        return response()->json($auto);
    }

    
    public function deleteData($id)
    {
        $auto = Auto::find($id);
        if($auto == NULL){
            return "No se ha encontrado el auto.";
        }
        $auto->delete();
        return "El auto ha sido eliminado";
    }

    //metodo delete que simula el borrado de una tupla mediante el cambio de visibilidad a false
    public function deleteVisibility($id)
    {
       $auto = Auto::find($id);
       if($auto == NULL){
            return "No se ha eliminado auto.";
        }
       $auto->visible = false;
       $auto->save();
       return "El auto ha sido eliminado.";
    } 
}
