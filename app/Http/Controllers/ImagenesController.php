<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Imagenes;
use Illuminate\Support\Facades\DB;

class ImagenesController extends Controller
{
    public function ViewEdit($id){
        $editIMG = Imagenes::where('id', $id)->firstOrFail();
        return view('layout/IMG', compact('editIMG'));
    }

    public function Update(Request $request, $id){
        $updateIMG = Imagenes::findOrFail($id);
        $requestIMG = $request->all();
        $updateIMG->update($requestIMG);
        return redirect()->to('layout/IMG');
    }

    public function UpdState($id){
        $estado = DB::select(DB::raw('SELECT img.status FROM imagenes img WHERE img.id = :id'), array('id' => $id));
        foreach ($estado as $item) {
            if ($item->status == 'DESACTIVATE') {
                DB::select(DB::raw('UPDATE imagenes SET status = "ACTIVE" WHERE id = :id'), array('id' => $id));
            }else if($item->status == 'ACTIVE'){
                DB::select(DB::raw('UPDATE imagenes SET status = "DESACTIVE" WHERE id = :id'), array('id' => $id));
            }
        }
        return redirect()->back();
    }
}
