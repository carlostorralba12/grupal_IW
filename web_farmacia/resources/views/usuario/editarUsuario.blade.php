@extends('layouts.app')

@section('content')

<div class="container">
    <h3>Editar Información Personal</h3>
    <form action="{{ action('App\Http\Controllers\UserController@update', $usuario->id) }}" method="POST" role="form">
        {{ csrf_field() }}
        <input name="_method" type="hidden">
        <div class="form-group">
            <label for="exampleInputName">Nombre</label>
            <input type="text" class="form-control" name="name" id="name" aria-describedby="" value="{{ $usuario->name }}" placeholder="{{ $usuario->name }}">
            @error('name')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="exampleInputSurname">Apellidos</label>
            <input type="text" class="form-control" name="surname" id="surname" aria-describedby="" value="{{ $usuario->surname }}" placeholder="{{ $usuario->surname }}">
            @error('surname')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        
        <div class="form-group">
            <label for="exampleInputCorreo">Correo Electrónico</label>
            <input type="email" class="form-control" name="email" id="email" aria-describedby="" value="{{ $usuario->email }}" placeholder="{{ $usuario->email }}">
            @error('email')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="exampleInputPhone">Teléfono</label>
            <input type="text" pattern="[0-9]{9}" class="form-control" name="phone" id="phone" aria-describedby="" value="{{ $usuario->phone }}" placeholder="{{ $usuario->phone }}">
            @error('phone')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <label for="exampleInputSurname">Dirección</label>
            <input type="text" class="form-control" name="adress" id="adress" aria-describedby="" value="{{ $usuario->adress }}" placeholder="{{ $usuario->adress }}">
            @error('adress')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>

        <div class="form-group">
            <button data-toggle="modal" data-target="#abrirModalCambiarContraseña" type="button" class="btn btn-primary btn-lg btn-block">Cambiar Contraseña</button>
        </div>

        <button type="submit" class="btn btn-outline-primary btn-lg">Confirmar</button>
        <a href="/user/{{ $usuario->id }}" type="button" class="btn btn-outline-secondary btn-lg">Cancelar</a>
    </form>
    
    <div class="modal fade" id="abrirModalCambiarContraseña" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Cambiar Contraseña</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
            </button>
        </div>
        <form action="{{ action('App\Http\Controllers\UserController@updatePassword', $usuario->id) }}" method="POST" role="form">
            <input type="hidden" name="_method" value="PUT">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <div class="modal-body">
            <div class="form-group">
                <label for="exampleInputPassword">Contraseña Actual</label>
                <input type="password" class="form-control" name="mypassword" id="mypassword" aria-describedby="">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword">Nueva Contraseña</label>
                <input type="password" minlength="8" class="form-control" name="password" id="password" aria-describedby="">
                @error('password')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
            </div>
            <div class="form-group">
                <label for="exampleInputPassword">Confirma tu Nueva Contraseña</label>
                <input type="password" minlength="8" class="form-control" name="password_confirmation" id="password_confirmation" aria-describedby="">
            </div>
            </div>
            <div class="modal-footer">
            <button type="submit" class="btn btn-primary">Aceptar</button>
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
            </div>
        </form>
        </div>
    </div>
    </div>
    <div style="margin-top: 2%">
        @if(!empty($info))
            <div class="alert alert-danger">
                <button type="button" class="close" data-dismiss="alert">
                    &times;
                </button>
                {{ $info }}
            </div>
        @endif
        @if(!empty($success))
            <div class="alert alert-success">
                <button type="button" class="close" data-dismiss="alert">
                    &times;
                </button>
                {{ $success }}
            </div>
        @endif
    </div>
</div>
@endsection