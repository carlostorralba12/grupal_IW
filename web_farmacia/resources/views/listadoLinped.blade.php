@extends('layouts.app')

@section('content')
<title>Listado linpeds</title>
<link rel="stylesheet" type="text/css" href="css/estiloEditarJuguete.css">
<div class="container">
  
    <table class="table table-dark table-striped table-hover table-sm">
    <tr>
        <th>ID</th>
        <th>Importe</th>
        <th>Cantidad</th>
        <th>ID del producto</th>
        <th>ID del pedido</th>
        <th></th>
        <th></th>
        <th></th>
    </tr>
    @foreach($linpeds as $linped)
        <tr>
            <td><input value ="{{ $linped->id }}" id="input" type="hidden" name="linped_id">{{$linped->id}}</input></td>
            <td>{{$linped->importe}}</td>
            <td>{{$linped->cantidad}}</td>
            <td>{{$linped->producto_id}}</td>
            <td>{{$linped->pedido_id}}</td>
            
            <form action="{{ action('App\Http\Controllers\LinpedController@postLinpedBorrada') }}" method="POST" role="form">
                @csrf
                <td><input name="linped_id" type="hidden" value="{{$linped->id}}"></td>
                <td><button class="btn btn-danger" type="submit" value="borrar" id="boton" name="action">Borrar</button></td>
            </form>

        <tr>
    @endforeach
    </table>

    
</div>
@endsection