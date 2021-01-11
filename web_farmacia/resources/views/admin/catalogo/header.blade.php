
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

    <h1 style="text-align:center; margin-bottom: 2%;">Administración Catálogo</h1>

    <div class="buttons-container">
       
        @include('admin.catalogo.categoria.addCategoria')
        @include('admin.catalogo.subcategoria.addSubcategoria')
        @include('admin.catalogo.addProducto')

        <script>
            @error ('nombreCategoria')
                $('#addCategoria').modal('show');
            @enderror
        </script>
  
    </div>

    @yield('adminCatalogo')
   
</div>

@endsection