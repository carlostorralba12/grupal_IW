@extends('layouts.app')

@section('content')
<title>Listado pedido</title>
<link rel="stylesheet" type="text/css" href="css/estiloEditarJuguete.css">
<div class="container">
    
    <table class="table table-dark table-striped table-hover table-sm">
    <tr>
        <th>Id del pedido</th>
        <th>Numero de pedido</th>
        <th>Estado del pedido</th>
        <th>Fecha</th>
        <th></th>
        <th></th>
    </tr>
    @foreach($pedidos as $pedido)
        <tr>
            <td>{{$pedido->id}}</td>
            <td>{{$pedido->numpedido}}</td>
            <td>{{$pedido->estado}}</td>
            <td>{{$pedido->fecha}}</td>
            <form action="{{ action('App\Http\Controllers\PedidoController@postShowModificar') }}" method="POST" role="form">
                @csrf
                <input style="display:none" value ="{{ $pedido->id }}"id="input" type="hidden" name="primaria"></input>
                
                <td><button class="btn btn-info" type="submit"  id="boton" name="action">Editar</button></td>
            </form>
            <form action="{{ action('App\Http\Controllers\PedidoController@postPedidoBorrar') }}" method="POST" role="form">
                @csrf
                <input style="display:none" value ="{{ $pedido->id }}"id="input" type="hidden" name="primaria"></input>
                
                <td><button class="btn btn-danger" type="submit"  id="boton" name="action">Borrar</button></td>
            </form>
        <tr>
    @endforeach
    </table>
    {{ $pedidos->links() }}
</div>
@endsection