<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Cliente extends Model
{
    use HasFactory;

    protected $fillable = ['nombre'];

    public function clientePedidos(){
        return $this->belongsTo('App\Models\clientePedido', 'idCliente');
    }
}
