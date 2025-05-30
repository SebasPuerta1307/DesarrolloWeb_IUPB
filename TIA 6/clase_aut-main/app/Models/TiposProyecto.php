<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TiposProyecto extends Model {
    use HasFactory;
    protected $table = 'tipos_proyecto';
    protected $fillable = ['codigo', 'descripcion'];
}
