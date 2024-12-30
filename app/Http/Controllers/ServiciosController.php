<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Servicios;
use Illuminate\Support\Facades\DB;

class ServiciosController extends Controller
{
    public function ViewEdit($id){
        $editServ = Servicios::where('id', $id)->firstOrFail();
        return view('layout/Servicios', compact('editServ'));
    }

    public function Update(Request $request, $id){
        $updateS = Servicios::findOrFail($id);
        $requestS = $request->all();
        $updateS->update($requestS);
        return redirect()->to('layout/Servicios');
    }

    public function UpdState($id){
        $estado = DB::select(DB::raw('SELECT s.status FROM servicios s WHERE s.id = :id'), array('id' => $id));
        foreach($estado as $item){
            if($item->status == 'DESACTIVATE'){
                DB::select(DB::raw('UPDATE servicios SET status = "ACTIVE" WHERE id = :id'), array('id' => $id));
            }else if($item->status == 'ACTIVE'){
                DB::select(DB::raw('UPDATE servicios SET status = "DESACTIVE" WHERE id = :id'), array('id' => $id));
            }
        }
        return redirect()->back();
    }
}
