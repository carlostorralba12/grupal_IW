@extends('layouts.app')

@section('content')

<head>

    <style>

        .editar-container{
            display: flex;
            flex-direction: column;
            margin:auto;
            width: 50%;
            padding: 2%;
            border: 1px solid #e8e8e8;
            border-radius: 5px;
      
            background-color: rgb(0, 255, 255);
            box-shadow: 5px 10px 18px #888888;
        }
        .boton-submit{
            margin-top: 2%;
           
        }
        .title-section{
            
        }

    </style>

</head>

<title>Modificar Pedido</title>
<div class="container">
    <a href="/admin/pedidos/"> <h2 style="text-align: center; margin: 2%">Administración de pedidos</h2></a>

    <div class="editar-container">
        <h3 style="text-align: center; margin: 2%">Modificar Pedido</h3>
        <form action="{{ action('App\Http\Controllers\PedidoController@postPedidoModificar') }}" method="POST" role="form">
            @csrf   
            <input value ="{{ $pedidos->id ?? old('pedido_id') }}" id="input" type="hidden" name="pedido_id">  
            <input value ="{{ $pedidos->user_id ?? old('user_id') }}" id="input" type="hidden" name="user_id">    
            <p>Numero Pedido</p>
            <input type="text" id="input" name="NumPedido" value ="{{ $pedidos->numpedido ?? old('numpedido') }}" style="width: 100%;">
            <p>Estado</p>
            <input type="text" id="input" name="estado" value ="{{ $pedidos->estado ?? old('estado') }}" style="width: 100%;">

            <div style="display: flex; justify-content: space-between;">
                <a id="cancelar" class="btn btn-secondary boton-submit" href="/admin/pedidos/">Cancelar</a>
                <button class ="btn btn-primary boton-submit" type="submit" value="modificar" id="boton" name="action">Confirmar</button>
            </div>
           
            
        </form>
    </div>
</div>
@endsection