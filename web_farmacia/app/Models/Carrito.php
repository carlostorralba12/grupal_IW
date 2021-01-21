<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Carrito extends Model
{
    use HasFactory;
    protected $fillable = ['id'];
    public function usuario(){
        return $this->belongsTo('App\Models\User');
    }
    public function producto(){
        return $this->belongsTo('App\Models\Producto');
    }
}
