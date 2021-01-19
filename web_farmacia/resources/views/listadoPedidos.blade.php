@extends('layouts.app')

@section('content')
<title>Listado pedido</title>
<link rel="stylesheet" type="text/css" href="css/estiloEditarJuguete.css">
<div class="container">
   
    <table class="table table-dark table-striped table-hover table-sm">
    <tr>
        <th>Numero de pedido</th>
        <th>ID del usuario</th>
        <th>Fecha</th>
        <th></th>
        <th></th>
    </tr>
    @foreach($pedidos as $pedido)
        <tr>
            <form action="{{ action('App\Http\Controllers\PedidoController@postPedidoBorrado') }}" method="POST" role="form">
                @csrf
                <td><input value ="{{ $pedido->id }}"id="input" type="hidden" name="primaria">{{$pedido->id}}</input></td>
                <td>{{$pedido->numpedido}}</td>
                <td>{{$pedido->fecha}}</td>
                <td><button class="btn btn-danger" type="submit" value="borrar" id="boton" name="action">Borrar</button></td>
            </form>
        <tr>
    @endforeach
    </table>
    
</div>
@endsection