<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inicio;
use App\Models\Informaciones;
use App\Models\Misvis;
use App\Models\Servicios;
use App\Models\Redes;
use App\Models\Imagenes;
use App\Models\Categorias;

class PaginaController extends Controller
{
    /*public function inicio(){
        $getInicio = Inicio::all();
        //dd($getInicio);
        return view('sitioWeb/index', compact('getInicio'));
    }*/

    public function inicio(){
        $getInformaciones = Informaciones::all();
        $getMisvis = Misvis::all();
        $getServicios = Servicios::all();
        $getRedes = Redes::all();
        $getImagenes = Imagenes::all();
        $getCategorias = Categorias::all();
        
        return view('SitioWeb/index', compact(
            'getInformaciones',
            'getImagenes',
            'getMisvis',
            'getServicios',
            'getRedes',
            'getCategorias'
        ));
    }
};
