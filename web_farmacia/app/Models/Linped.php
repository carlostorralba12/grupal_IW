<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Linped extends Model
{
    protected $fillable = ['id'];
    public function producto(){
        return $this->belongsTo('App\Models\Producto');
    }
    public function pedido(){
        return $this->belongsTo('App\Models\Pedido');
    }
}
