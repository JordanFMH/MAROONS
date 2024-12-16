<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inicio;

class PaginaController extends Controller
{
    public function inicio(){
        $getInicio = Inicio::all();
        //dd($getInicio);
        return view('sitioWeb/index', compact('getInicio'));
    }
};
