<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Comida extends Model
{
    use HasFactory;

    protected $fillable = ['nombre', 'precio'];

    public function clientePedido(){
        return $this->belongsTo('App\Models\clientePedido', 'idComida');
    }
}
