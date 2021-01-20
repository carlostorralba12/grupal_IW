<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use Illuminate\Http\Request;
use Auth;

class UserDAO extends Model{
    public static function findID($id){
        return User::find($id);
    }
 
    public static function borrarUsuario($usuario){
        $usuario->delete();
        Auth::logout();
    }

    public static function editarUsuario($usuario, Request $request){
        $usuario->update($request->all());
    }
}
