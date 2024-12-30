<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Redes;
use Illuminate\Support\Facades\DB;

class RedesController extends Controller
{
    public function ViewEdit($id){
        $editRedes = Redes::where('id', $id)->firstOrFail();
        return view('layout/Redes', compact('editRedes'));
    }

    public function Update(Request $request, $id){
        $updateR = Redes::findOrFail($id);
        $requestR = $request->all();
        $updateR->update($requestR);
        return redirect()->to('layout/Redes');
    }

    public function UpdState($id){
        $estado = DB::select(DB::raw('SELECT r.status FROM redes r WHERE r.id = :id'), array('id' => $id));
        foreach ($estado as $item) {
            if ($item->status == 'DESACTIVATE') {
                DB::select(DB::raw('UPDATE redes SET status = "ACTIVE" WHERE id = :id'), array('id' => $id));
            }else if($item->status == 'ACTIVE'){
                DB::select(DB::raw('UPDATE redes SET status = "DESACTIVE" WHERE id = :id'), array('id' => $id));
            }
        }
        return redirect()->back();
    }
}
