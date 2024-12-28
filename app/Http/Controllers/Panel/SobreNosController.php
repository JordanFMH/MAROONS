<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\SobreNos;

class SobreNosController extends Controller
{
    public function index(){
        $SobreNos = SobreNos::where('status','ACTIVE')->get();
        return view('adminPC.SobreNos.index', compact('SobreNos'));
    }

    public function create(){
        return view('adminPC.SobreNos.create');
    }
    public function store(Request $request){

       $SobreNos = $request->all();//almancena los datos que se mandan desde el fomulario html
        
        if($imagen = $request->file('imagen')){
            $ruta = 'imagenSobreNos/';
            $nombreI = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($ruta,$nombreI);
            $SobreNos['imagen'] = "$nombreI";
        }

        SobreNos::create($SobreNos);
        return redirect()->to('/SobreNos');

    }

    public function edit($id){
        $SobreNos = SobreNos::find($id);
        return view('adminPC.SobreNos.edit', compact('SobreNos'));
    }

    public function update(Request $request, SobreNos $SobreNos, $img){
        
        $datos = $request->all();//almancena los datos que se mandan desde el fomulario html

        $SobreNos = SobreNos::find($datos['id']);

        if($imagen = $request->file('imagen')){
            $ruta = 'imagenSobreNos/';
            $nombreI = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($ruta,$nombreI);
            $datos['imagen'] = "$nombreI";
        }else{
            $datos['imagen'] = "$img";
        }

        $SobreNos->update($datos);
        return redirect()->to('/SobreNos');

    }

    public function status($id){
        $estado= SobreNos::find($id);

        if($estado->status == "ACTIVE"){
            SobreNos::where('id', $id)->update(['status' => "DESACTIVATE"]);
        }else{
            SobreNos::where('id', $id)->update(['status' => "ACTIVE"]);
        }

        return redirect()->to('SobreNos');
    }

    public function indexD(){
        $SobreNos = SobreNos::where('status','DESACTIVATE')->get();
        return view('adminPC.SobreNos.indexD', compact('SobreNos'));
    }
}
