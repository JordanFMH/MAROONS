<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CarruselsController extends Controller
{
    public function infoMisVis(){
        $getMisVi = MisVis::all();
        return view('sitioWeb.MisionVision.informacion', compact('getMisVi'));
    }

    public function editMisVis($id){
        $editMisVi = MisVis::where('id', $id)->firstOrFail();
        //dd($editCliente);
        return view('editar', compact('editMisVi'));
    }

    public function actuMisVis(Request $request, $id){
        //dd($id, $request->nombre, $request->apellido);
        $actuMisVis = MisVis::findOrFail($id);
        $requestMisVis = $request->all();
        $actuMisVis->update($requestMisVis);
        return redirect()->to('/informacion'); 
    }
}
