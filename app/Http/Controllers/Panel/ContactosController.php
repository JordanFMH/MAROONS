<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Contactos;

class ContactosController extends Controller
{
    public function index(){
        $Contacto = Contactos::where('status','ACTIVE')->get();
        return view('adminPC.Contactos.index', compact('Contacto'));
    }

    public function create(){
        return view('adminPC.Contactos.create');
    }

    public function store(Request $request){

        //dd( Red::create($request->all()));

        Contactos::create($request->all());
        return redirect()->to('/Contactos');
    }

    public function edit($id){
        $Contacto = Contactos::find($id);
        return view('adminPC.Contactos.edit', compact('Contacto'));
    }

    public function update(Request $request, Contactos $Contacto){
    
        //dd($request->id);
        $datos = $request->all();
        $Contacto = Contactos::find($datos['id']);
        $Contacto->update($datos);
        return redirect()->to('/Contactos');

    }

    public function status($id){
        $estado = Contactos::find($id);
        if($estado->status == 'ACTIVE'){
            
           Contactos::where('id', $id)->update(['status'=> 'DESACTIVATE']);
        }else{
            Contactos::where('id', $id)->update(['status'=> 'ACTIVE']);
        }
        return redirect()->to('/Contactos');

    }
    
    public function indexD(){
        $Contacto = Contactos::where('status','DESACTIVATE')->get();
        return view('adminPC.Contactos.indexD', compact('Contacto'));
    }
}
