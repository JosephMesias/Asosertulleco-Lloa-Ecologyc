<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
    use HasFactory;

    protected $fillable = [
        'titulo',
        'descripcion',
        'servicioURL',
        'imagenes_id',
        'categoria_id'
    ];
}
