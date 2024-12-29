<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Redes;

class RedesController extends Controller
{
    public function index(){
        $Red = Redes::where('status','ACTIVE')->get();
        return view('adminPC.Redes.index', compact('Red'));
    }

    /**
     * create retorna la interfaz para crear una nueva red social
     */
    public function create(){
        return view('adminPC.Redes.create');
    }
    /**
     * store crear una nueva red social 
     */

    public function store(Request $request){

        //dd( Red::create($request->all()));

        Redes::create($request->all());
        return redirect()->to('/Redes');
    }
    /**
     * edit retorna una vista para editar una red social
     */

    public function edit($id){
        $Red = Redes::find($id);
        return view('adminPC.Redes.edit', compact('Red'));
    }

    /**
     * update permite actualizar una red social
     */

    public function update(Request $request, Redes $Red){
    
        //dd($request->id);
        $datos = $request->all();
        $Red = Redes::find($datos['id']);
        $Red->update($datos);
        return redirect()->to('/Redes');

    }
    /**
     * status permite actualizar el estado de una red social
     */

    public function status($id){
        $estado = Redes::find($id);
        if($estado->status == 'ACTIVE'){
            
           Redes::where('id', $id)->update(['status'=> 'DESACTIVATE']);
        }else{
            Redes::where('id', $id)->update(['status'=> 'ACTIVE']);
        }
        return redirect()->to('/Redes');

    }
    public function indexD(){
        $Red = Redes::where('status','DESACTIVATE')->get();
        return view('adminPC.Redes.indexD', compact('Red'));
    }
}
