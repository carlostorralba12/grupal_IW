@extends('layouts.app')

@section('content')

<title>Modificar Pedido</title>
<div class="encabezado">
    
    <div class="editar">
        <h1>Modificar Pedido</h1>
        <form action="{{ action('App\Http\Controllers\PedidoController@postPedidoModificar') }}" method="POST" role="form">
            @csrf   
            <input value ="{{ $pedidos->id ?? old('pedido_id') }}" id="input" type="hidden" name="pedido_id">  
            <input value ="{{ $pedidos->user_id ?? old('user_id') }}" id="input" type="hidden" name="user_id">    
            <p>NumPedido</p>
            <input type="text" id="input" name="NumPedido" value ="{{ $pedidos->numpedido ?? old('numpedido') }}">
            <p>Estado</p>
            <input type="text" id="input" name="estado" value ="{{ $pedidos->estado ?? old('estado') }}">
            

            <button class ="btn btn-primary" type="submit" value="modificar" id="boton" name="action">Confirmar</button>
            
        </form>
    </div>
</div>
@endsection