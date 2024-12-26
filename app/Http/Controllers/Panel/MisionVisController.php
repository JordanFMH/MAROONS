<?php

namespace App\Http\Controllers\panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\MisVis;

class MisionVisController extends Controller
{
    public function index(){
        return view('adminPC.MisVis.index2');
    }

    public function create(){
        return view('adminPC.MisVis.create');
    }

    public function store(Request $request){
        dd($request);
        MisVis::create($request->all());
        return redirect()->to('/MisVis');
    }

    public function edit(){
        return view('adminPC.MisVis.edit');
    }
}
