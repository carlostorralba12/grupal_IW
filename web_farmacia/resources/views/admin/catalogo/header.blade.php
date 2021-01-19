
@extends('layouts.app')
@section('content')

<head>
    <style>
        .buttons-container{
            margin: auto;
            display: flex;
            justify-content: space-between;
            border: 1px solid #e8e8e8;
            border-radius: 5px;
            padding: 2%;
            background-color: rgb(0, 255, 255);
            box-shadow: 5px 10px 18px #888888;
           
        }

    </style>

</head>

<div class="container">

    <a href="/admin/categorias/"><h1 style="text-align:center; margin-bottom: 2%;">Administración Catálogo</h1></a>

    <div class="buttons-container">
       
        <a href="/admin/categorias/añadir" class="btn btn-success" role="button" aria-pressed="true">Añadir Categoria</a>
        <a href="/admin/subcategorias/añadir" class="btn btn-secondary" role="button" aria-pressed="true">Añadir Subcategoria</a>
        <a href="/admin/productos/añadir" class="btn btn-primary" role="button" aria-pressed="true">Añadir Producto</a>
  
    </div>

    @yield('adminCatalogo')
   
</div>

@endsection