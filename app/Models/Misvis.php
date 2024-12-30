<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Misvis extends Model
{
    use HasFactory;

    protected $fillable = [
        'texto',
        'image',
        'imagenes_id'
    ];
}
