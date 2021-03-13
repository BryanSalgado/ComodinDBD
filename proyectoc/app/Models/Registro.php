<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Registro extends Model
{
    use HasFactory;
    protected $table = 'registro';
    
    public function registroCliente(){
        return $this->belongsTo(Cliente::class);
    }

    public function registroAuto(){
        return $this->belongsTo(Auto::class);
    }
}
