<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Informaciones;
use App\Models\Misvis;
use App\Models\Servicios;
use App\Models\Redes;
use App\Models\Imagenes;
use App\Models\Categorias;

class PaneldeControlController extends Controller
{
    /*public function paneldecontrol(){
        $getInformaciones = Informaciones::all();
        $getMisvis = Misvis::all();
        $getServicios = Servicios::all();
        $getRedes = Redes::all();
        $getImagenes = Imagenes::all();
        $getCategorias = Categorias::all();
        
        return view('adminPC/paneldecontrol', compact(
            'getInformaciones',
            'getMisvis',
            'getServicios',
            'getRedes',
            'getImagenes',
            'getCategorias'
        ));
    }*/

    public function paneldecontrol(){
        return view('layout/admin');
    }
}
