<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;

class CategoriasController extends Controller
{
    public function informacion(){
        $getCategoria = Categorias::all();
        return view('sitioWeb.Categorias.informacion', compact('getCategoria'));
    }

    public function EditCategoria($id){
        $editCategoria = Categorias::where('id', $id)->firstOrFail();
        //dd($editCliente);
        return view('EditarCategoria', compact('editCategoria'));
    }

    public function ActuCategoria(Request $request, $id){
        //dd($id, $request->nombre, $request->apellido);
        $actualiCategoria = Cliente::findOrFail($id);
        $requestCategoria = $request->all();
        $actualiCategoria->update($requestCategoria);
        return redirect()->to('/InfoCategorias'); 
    }
}
