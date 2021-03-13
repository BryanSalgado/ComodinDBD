<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;
    protected $table = 'cliente';
    
    public function clientePais(){
        return $this->belongsTo(Pais::class);
    }

    public function clienteRegistro(){
        return $this->hasMany(Registro::class);
    }
    
}
