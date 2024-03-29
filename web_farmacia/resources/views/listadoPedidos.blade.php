@extends('layouts.app')

@section('content')
<title>Listado pedido</title>

<div class="container">
    <a href="/admin/pedidos/"> <h2 style="text-align: center; margin: 2%">Mis pedidos</h2></a>

    <table class="table table-dark table-striped table-hover table-sm">
    <tr>
        
        <th>Numero del pedido</th>
        <th>Fecha</th>
        <th>Estado</th>
        <th></th>
        <th></th>
    </tr>
    @foreach($pedidos as $pedido)
        <tr>
        <td>{{$pedido->numpedido}}</td>
        <td>{{$pedido->fecha}}</td>
        <td>{{$pedido->estado}}</td>
        
            <form action="{{ action('App\Http\Controllers\LinpedController@showLinped') }}" method="GET" role="form">
                @csrf
                <input  value ="{{ $pedido->id }}"id="input" type="hidden" name="primaria"></input>
                
               
                <td><button class="btn btn-info" type="submit" value="ver" id="boton" name="action">Ver Pedido</button></td>
            </form>
            <form action="{{ action('App\Http\Controllers\PedidoController@postPedidoBorrado') }}" method="POST" role="form">
                @csrf
                <input style="display:none" value ="{{ $pedido->id }}"id="input" type="hidden" name="primaria"></input>
                
                <td><button class="btn btn-danger" type="submit" value="ver" id="boton" name="action">Borrar</button></td>
                
            </form>
        </tr>
    @endforeach
    </table>
    
</div>
@endsection