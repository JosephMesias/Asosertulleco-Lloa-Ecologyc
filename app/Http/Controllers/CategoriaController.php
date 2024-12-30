<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Categorias;
use Illuminate\Support\Facades\DB;

class CategoriaController extends Controller
{
    public function ViewEdit($id){
        $editCategorias = Categorias::where('id', $id)->firstOrFail();
        return view('layout/Categorias', compact('editCategorias'));
    }

    public function Update(Request $request, $id){
        $updateCT = Categorias::findOrFail($id);
        $requestCT = $request->all();
        $updateCT->update($requestCT);
        return redirect()->to('layout/Categorias');
    }

    public function UpdState($id){
        $estado = DB::select(DB::raw('SELECT ct.status FROM categorias ct WHERE ct.id = :id'), array('id' => $id));
        foreach ($estado as $item) {
            if ($item->status == 'DESACTIVATE') {
                DB::select(DB::raw('UPDATE categorias SET status = "ACTIVE" WHERE id = :id'), array('id' => $id));
            }else if($item->status == 'ACTIVE'){
                DB::select(DB::raw('UPDATE categorias SET status = "DESACTIVE" WHERE id = :id'), array('id' => $id));
            }
        }
        return redirect()->back();
    }
}
