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
    @foreach($productos as $products)
        <tr>
            
            <td>{{$products->nombre}}</td>
            <td>{{$products->imagen}}</td>
            
    @endforeach    
    @foreach($linpeds as $linped)   
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