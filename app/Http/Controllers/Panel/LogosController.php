<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Logos;

class LogosController extends Controller
{
    public function index(){
        $Logo = Logos::where('status','ACTIVE')->get();
        return view('adminPC.Logo.index', compact('Logo'));
    }

    public function create(){
        return view('adminPC.Logo.create');
    }
    public function store(Request $request){

       $Logo = $request->all();//almancena los datos que se mandan desde el fomulario html
        
        if($imgL = $request->file('logo')){
            $ruta = 'imagenLogo/';
            $nombreI = date('YmdHis').".".$imgL->getClientOriginalExtension();
            $imgL->move($ruta,$nombreI);
            $Logo['logo'] = "$nombreI";
        }

        Logos::create($Logo);
        return redirect()->to('/Logo');

    }

    public function edit($id){
        $Logo = Logos::find($id);
        return view('adminPC.Logo.edit', compact('Logo'));
    }

    public function update(Request $request, Logos $Logo, $img){
        
        $datos = $request->all();//almancena los datos que se mandan desde el fomulario html

        $Logo = Logos::find($datos['id']);

        if($imgL = $request->file('logo')){
            $ruta = 'imagenLogo/';
            $nombreI = date('YmdHis').".".$imgL->getClientOriginalExtension();
            $imgL->move($ruta,$nombreI);
            $datos['logo'] = "$nombreI";
        }else{
            $datos['logo'] = "$img";
        }

        $Logo->update($datos);
        return redirect()->to('/Logo');

    }

    public function status($id){
        $estado= Logos::find($id);

        if($estado->status == "ACTIVE"){
            Logos::where('id', $id)->update(['status' => "DESACTIVATE"]);
        }else{
            Logos::where('id', $id)->update(['status' => "ACTIVE"]);
        }

        return redirect()->to('/Logo');
    }

    public function indexD(){
        $Logo = Logos::where('status','DESACTIVATE')->get();
        return view('adminPC.Logo.indexD', compact('Logo'));
    }
}
