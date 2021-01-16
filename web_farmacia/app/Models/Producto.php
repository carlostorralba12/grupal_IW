<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Producto extends Model
{
    use HasFactory;
    protected $fillable = [
        'id', 
        'nombre', 
        'pvp', 
        'imagen', 
        'descripcionCorta', 
        'descripcionLarga', 
        'referencia',
        'categoria_id',
        'subcategoria_id'
    ];

   

    public function subcategoria() {
        
        return $this->belongsTo('App\Models\Subcategoria');
    }

    public function users(){
        return $this->belongsToMany('App\Models\Producto');
    }
}
