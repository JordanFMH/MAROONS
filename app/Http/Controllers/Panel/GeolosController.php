<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Geolos;

class GeolosController extends Controller
{
    public function index(){
        $Geo = Geolos::where('status','ACTIVE')->get();
        return view('adminPC.Geolo.index', compact('Geo'));
    }

    public function create(){
        return view('adminPC.Geolo.create');
    }

    public function store(Request $request){
        Geolos::create($request->all());
        return redirect()->to('/Geolocalizacion');
    }

    public function edit($id){
        $Geo = Geolos::find($id);
        return view('adminPC.Geolo.edit', compact('Geo'));
    }

    public function update(Request $request, Geolos $Geo){
        $datos = $request->all();
        $Geo = Geolos::find($datos['id']);
        $Geo->update($datos);
        return redirect()->to('/Geolocalizacion');
    }

    public function status($id){
        $estado = Geolos::find($id);
        if($estado->status == 'ACTIVE'){
            
           Geolos::where('id', $id)->update(['status'=> 'DESACTIVATE']);
        }else{
            Geolos::where('id', $id)->update(['status'=> 'ACTIVE']);
        }
        return redirect()->to('/Geolocalizacion');

    }
    public function indexD(){
        $Geo = Geolos::where('status','DESACTIVATE')->get();
        return view('adminPC.Geolo.indexD', compact('Geo'));
    }
}
