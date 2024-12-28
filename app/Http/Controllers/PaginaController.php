<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Logos;
use App\Models\MisVis;
use App\Models\Carrusels;
use App\Models\SobreNos;

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
    
        return view('SitioWeb.index', compact(
            'Logo',
            'Mision', 
            'Vision',
            'Img1C',
            'Img2C',
            'Img3C',
            'SobreN1',
            'SobreN2'
    ));
    }
};
