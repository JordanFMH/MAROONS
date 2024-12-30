<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logos;
use App\Models\MisVis;
use App\Models\Carrusels;
use App\Models\SobreNos;
use App\Models\Contactos;
use App\Models\Redes;
use App\Models\Geolos;

class PaginaController extends Controller
{
    public function inicio(){
        $Logo = Logos::where('status', 'ACTIVE')->where('id', 1)->first();

        $Mision = MisVis::where('status', 'ACTIVE')->where('id', 1)->first();
        $Vision = MisVis::where('status', 'ACTIVE')->where('id', 2)->first();

        $Img1C = Carrusels::where('status', 'ACTIVE')->where('id', 1)->first();
        $Img2C = Carrusels::where('status', 'ACTIVE')->where('id', 2)->first();
        $Img3C = Carrusels::where('status', 'ACTIVE')->where('id', 3)->first();

        $SobreN1 = SobreNos::where('status', 'ACTIVE')->where('id', 1)->first();
        $SobreN2 = SobreNos::where('status', 'ACTIVE')->where('id', 2)->first();

        $Cont1 = Contactos::where('status', 'ACTIVE')->where('id', 1)->first();
        $Cont2 = Contactos::where('status', 'ACTIVE')->where('id', 2)->first();
        $Cont3 = Contactos::where('status', 'ACTIVE')->where('id', 3)->first();

        $Red1 = Redes::where('status', 'ACTIVE')->where('id', 1)->first();

        $Geo = Geolos::where('status', 'ACTIVE')->where('id', 1)->first();
    
        return view('SitioWeb.index', compact(
            'Logo',
            'Mision', 'Vision',
            'Img1C','Img2C','Img3C',
            'SobreN1','SobreN2',
            'Cont1','Cont2','Cont3',
            'Red1',
            'Geo'
    ));
    }
};
