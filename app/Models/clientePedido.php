<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class clientePedido extends Model
{
    use HasFactory;

    public function clientes(){
        return $this->hasMany('App\Models\Cliente', 'idCliente');
    }

    public function comidas(){
        return $this->hasMany('App\Models\Comida', 'idComida');
    }
}
