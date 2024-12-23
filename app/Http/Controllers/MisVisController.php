<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Misvis;

class MisVisController extends Controller
{
    public function infoMisVis(){
        $getMisVi = Misvis::all();
        return view('sitioWeb.MisionVision.informacion', compact('getMisVi'));
    }

    public function editMisVis($id){
        $editMisVi = Misvis::where('id', $id)->firstOrFail();
        //dd($editCliente);
        return view('editar', compact('editMisVi'));
    }

    public function actuMisVis(Request $request, $id){
        //dd($id, $request->nombre, $request->apellido);
        $actuMisVis = Misvis::findOrFail($id);
        $requestMisVis = $request->all();
        $actuMisVis->update($requestMisVis);
        return redirect()->to('/informacion'); 
    }
}
