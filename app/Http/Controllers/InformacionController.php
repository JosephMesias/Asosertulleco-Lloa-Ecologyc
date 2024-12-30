<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informaciones;
use Illuminate\Support\Facades\DB;

class InformacionController extends Controller
{
    public function ViewEdit($id){
        $editInfo = Informaciones::where('id', $id)->firstOrFail();
        return view('layout/Informacion', compact('$editInfo'));
    }

    public function Update(Request $request, $id){
        $updateI = Informaciones::findOrFail($id);
        $requestI = $request->all();
        $updateI->update($requestI);
        return redirect()->to('layout/Informacion');
    }

    public function UpdState($id){
        $estado = DB::select(DB::raw('SELECT i.status FROM informaciones i WHERE i.id = :id'), array('id'=>$id));
        foreach($estado as $item){
            if($item->status == 'DESACTIVATE'){
                DB::select(DB::raw('UPDATE informaciones SET status ="ACTIVE" WHERE id = :id'), array('id'=>$id));
            }else if($item->status == 'ACTIVE'){
                DB::select(DB::raw('UPDATE informaciones SET status ="DESACTIVE" WHERE id = :id'), array('id'=>$id));
            }
        }
        return redirect()->back();
    }
}
