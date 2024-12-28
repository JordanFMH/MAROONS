<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Carrusels;

class CarruselsController extends Controller
{
    public function index(){
        $Carrusel = Carrusels::where('status','ACTIVE')->get();
        return view('adminPC.Carrusel.index', compact('Carrusel'));
    }

    public function create(){
        return view('adminPC.Carrusel.create');
    }
    public function store(Request $request){

       $Carrusel = $request->all();//almancena los datos que se mandan desde el fomulario html
        
        if($imagen = $request->file('imagen')){
            $ruta = 'imagenCarrusel/';
            $nombreI = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($ruta,$nombreI);
            $Carrusel['imagen'] = "$nombreI";
        }
        Carrusels::create($Carrusel);
        return redirect()->to('/Carrusel');

    }

    public function edit($id){
        $Carrusel = Carrusels::find($id);
        return view('adminPC.Carrusel.edit', compact('Carrusel'));
    }

    public function update(Request $request, Carrusels $Carrusel, $img){
        
        $datos = $request->all();//almancena los datos que se mandan desde el fomulario html

        $Carrusel = Carrusels::find($datos['id']);

        if($imagen = $request->file('imagen')){
            $ruta = 'imagenCarrusel/';
            $nombreI = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($ruta,$nombreI);
            $datos['imagen'] = "$nombreI";
        }else{
            $datos['imagen'] = "$img";
        }

        $Carrusel->update($datos);
        return redirect()->to('/Carrusel');

    }

    public function status($id){
        $estado= Carrusels::find($id);

        if($estado->status == "ACTIVE"){
            Carrusels::where('id', $id)->update(['status' => "DESACTIVATE"]);
        }else{
            Carrusels::where('id', $id)->update(['status' => "ACTIVE"]);
        }

        return redirect()->to('/Carrusel');
    }

    public function indexD(){
        $Carrusel = Carrusels::where('status','DESACTIVATE')->get();
        return view('adminPC.Carrusel.indexD', compact('Carrusel'));
    }
}
