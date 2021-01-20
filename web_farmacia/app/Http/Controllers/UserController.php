<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\UserDAO;
use Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use Hash;

class UserController extends Controller{
    public function getPerfilUsuario($id){
        $usuario = UserDAO::findID($id);
        return view('usuario/perfilUsuario', ['usuario' => $usuario]);
    }

    public function getEditarUsuario($id){
        $usuario = UserDAO::findID($id);
        return view('usuario/editarUsuario')->with('usuario', $usuario);
    }

    public function destroy($id){
        $usuario = UserDAO::findID($id);
        UserDAO::borrarUsuario($usuario);
        return redirect('');
    }

    public function update(Request $request, $id){
        $usuario = UserDAO::findID($id);
        UserDAO::editarUsuario($usuario, $request);
        return redirect('/user/'.$usuario->id)->with('success', 'El usuario se ha modificado');
     }

     public function updatePassword(Request $request){
        
        $usuario = Auth::user();
        $passwordActualIntr = $_POST["mypassword"];
        $passwordNuevo = $_POST["password"];
        $passwordConfirmation = $_POST["password_confirmation"];
        if($passwordConfirmation != $passwordNuevo){
            return view('usuario/editarUsuario')->with('usuario', $usuario)
                                        ->with('info', 'La confirmación no es correcta');
        }

        if(!Hash::check($passwordActualIntr, $usuario->password)){
            return view('usuario/editarUsuario')->with('usuario', $usuario)
                                        ->with('info', 'La contraseña actual es incorrecta');
        }
        else{
            $usuario->fill([
                'password' => Hash::make($passwordNuevo)
            ])->save();
        }
        return view('usuario/editarUsuario')->with('usuario', $usuario)
                                    ->with('success', 'La contraseña se ha modificado');
    }
}
