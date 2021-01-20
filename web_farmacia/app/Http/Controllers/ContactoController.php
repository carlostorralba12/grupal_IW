<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contacto;
use Mail;

class ContactoController extends Controller
{
    public function contacto(){
        return view('emails/contacto');
    }

    public function contactoPost(Request $request){
        $this->validate($request, [
            'nombre' => 'required',
            'telefono' => 'required',
            'mensaje' => 'required'
        ]);
        Contacto::create($request->all());

        Mail::send('emails/email',
            array(
                'nombre' => $request->get('nombre'),
                'telefono' => $request->get('telefono'),
                'user_mensaje' => $request->get('mensaje')
            ), function($mensaje){
                $mensaje->from('farmaciaiw@gmail.com');
                $mensaje->to('farmaciaiw@gmail.com', 'Admin')->subject('Contactado para consulta');
            });

        return back()->with('success', 'Tu pregunta ha sido enviada. ¡Gracias por contactarnos!');
    }
}
