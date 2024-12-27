<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Inicio;
use App\Models\Informaciones;
use App\Models\MisVis;
use App\Models\Servicios;
use App\Models\Redes;
use App\Models\Carrusels;
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
        $getMisVis = MisVis::all();
        $getServicios = Servicios::all();
        $getRedes = Redes::all();
        $getCarrusel = Carrusels::all();
        $getCategorias = Categorias::all();
        
        return view('SitioWeb/index', compact(
            'getInformaciones',
            'getCarrusel',
            'getMisVis',
            'getServicios',
            'getRedes',
            'getCategorias'
        ));
    }
};
