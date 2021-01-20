<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pedido extends Model
{
    protected $fillable = ['id'];
    
    public function linpeds(){
        return $this->hasMany('App\Models\Linped');
    }
}
