<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manzana extends Model
{
    protected $fillable = [
        'tipoManzana',
        'precioKilo',
    ];
}
