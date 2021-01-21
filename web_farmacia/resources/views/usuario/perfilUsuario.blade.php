@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row" style="margin-bottom: 11px; justify-content: space-between">
        <h2 float="left">{{$usuario->name}} {{$usuario->surname}}</h2>
        <button type="button" data-target="#abrirModalEliminarUsuario" data-toggle="modal" class="btn btn-outline-danger" float="right">Eliminar Cuenta</button>
    </div>
    <div style="padding: 10px; border-style: dashed; border-width: 1px; margin-bottom: 11px">
        <div class="row" style="justify-content: space-between; margin:0px">
            <label float="left">Correo electrónico: {{ $usuario->email }}</label>
            <a float="right" href="/user/{{ $usuario->id }}/edit" type="button" class="btn btn-outline-primary">Editar</a>
        </div>
        <p>Teléfono: {{ $usuario->phone }}</p>
        <p>Dirección: {{ $usuario->adress }}</p>
    </div>

    <div style="margin-top: 2%">
      @if(!empty(session('success')))
          <div class="alert alert-success">
              <button type="button" class="close" data-dismiss="alert">
                  &times;
              </button>
              {{ session('success') }}
          </div>
      @endif
    </div>
</div>

<!-- Modal Eliminar Usuario -->
<div class="modal fade" id="abrirModalEliminarUsuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content" style="border: 2px solid #ea3232;">
      <div class="modal-body">
            <div class="row" style="justify-content: space-between; margin:0px">
                <h5 class="modal-title" id="exampleModalLabel">¿Estás seguro de que quiere eliminar la cuenta?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="row" style="justify-content: space-around; padding: 20px 88px 0px 88px">
                <form action="{{ action('App\Http\Controllers\UserController@destroy', $usuario->id) }}" method="POST">
                    {{csrf_field()}}
                    <input name="_method" type="hidden" value="POST">
                    <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
                <button type="button" class="btn btn-outline-light" data-dismiss="modal" style="color: #000000; border-color: #d2d3d4">Cancelar</button>
            </div>
      </div>
    </div>
  </div>
</div>

@endsection