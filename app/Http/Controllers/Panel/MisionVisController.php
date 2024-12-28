<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MisVis;
use Whoops\Util\Misc;

class MisionVisController extends Controller
{
    public function index(){
        $MisVis = MisVis::where('status','ACTIVE')->get();
        return view('adminPC.MisVis.index', compact('MisVis'));
    }

    public function create(){
        return view('adminPC.MisVis.create');
    }
    public function store(Request $request){

       $MisVis = $request->all();//almancena los datos que se mandan desde el fomulario html
        
        if($imagen = $request->file('image')){
            $ruta = 'imagenMisVis/';
            $nombreI = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($ruta,$nombreI);
            $MisVis['image'] = "$nombreI";
        }

        //MisVis::create($request->all());
        MisVis::create($MisVis);
        return redirect()->to('/MisVis');

    }

    public function edit($id){
        $MisVis = MisVis::find($id);
        return view('adminPC.MisVis.edit', compact('MisVis'));
    }

    public function update(Request $request, MisVis $MisVis, $img){
        
        //dd($imagen);
        $datos = $request->all();//almancena los datos que se mandan desde el fomulario html

        $MisVis = MisVis::find($datos['id']);

        if($imagen = $request->file('image')){
            $ruta = 'imagenMisVis/';
            $nombreI = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($ruta,$nombreI);
            $datos['image'] = "$nombreI";
        }else{
            $datos['image'] = "$img";
        }

        $MisVis->update($datos);
        return redirect()->to('/MisVis');

    }

    public function status($id){
        $estado= MisVis::find($id);

        if($estado->status == "ACTIVE"){
            MisVis::where('id', $id)->update(['status' => "DESACTIVATE"]);
        }else{
            MisVis::where('id', $id)->update(['status' => "ACTIVE"]);
        }

        return redirect()->to('/MisVis');
    }

    public function indexD(){
        $MisVis = MisVis::where('status','DESACTIVATE')->get();
        return view('adminPC.MisVis.indexD', compact('MisVis'));
    }
}
