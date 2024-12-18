<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\Logos;

class LogoController extends Controller
{
    public function Logo(){
        $getLogos = Logos::all();
        return view();
    }
}
