<?php

namespace App\Http\Controllers\Panel;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Misvis;

class MisVisController extends Controller
{
    public function index(){
        $getMisVis = Misvis::where('status', 'ACTIVE')->get();
        return view('AdminPC.MisVis.index', compact('getMisVis'));
    }

    public function create(){
        return view('AdminPC.MisVis.create');
    }
    
    public function store(Request $request){
        $MisVis = $request->all();
        //dd($MisVis,$MisVis['texto']);
        
        if($imagen = $request->file('image')){
            $ruta = 'imagen/';
            $nombreIMG = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($ruta, $nombreIMG);
            $MisVis['image'] = "$nombreIMG";
        }

        Misvis::create($MisVis);
        return redirect()->to('/misvis');
    }
    
    public function edit($id){
        $editMisVis = Misvis::find($id);
        //dd($editMisVis);
        return view('AdminPC.MisVis.edit', compact('editMisVis'));
    }
    
    public function update(Request $request, Misvis $MisVis, $img){
        $Datos = $request->all();
        $MisVis = Misvis::find($Datos['id']);

        if($imagen = $request->file('image')){
            $ruta = 'imagen/';
            $nombreIMG = date('YmdHis').".".$imagen->getClientOriginalExtension();
            $imagen->move($ruta, $nombreIMG);
            $Datos['image'] = "$nombreIMG";
        }else{
            $Datos['image'] = "$img";
        }

        $MisVis->update($Datos);
        return redirect()->to('/misvis');
    }
}