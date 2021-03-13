<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{
    use HasFactory;
    protected $table = 'auto';
    
    public function autoSucursal(){
        return $this->belongsTo(Sucursal::class);
    }

    public function autoRegistro(){
        return $this->hasMany(Registro::class);
    }
}
