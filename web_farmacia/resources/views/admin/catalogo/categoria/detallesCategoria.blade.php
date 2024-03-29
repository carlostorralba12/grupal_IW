@extends('admin.catalogo.header')
@section('adminCatalogo')

<head>
    <style>

        .subcategoria-item{
            font-size: medium;
            margin: 1%;
            text-transform: capitalize;
            display:flex;
            justify-content: space-between;
            padding: 3%;
            color:white;
            background-color: #1F8577;
            border-radius: 5px;
        }
        .subcategorias-content{
            display: grid;
            grid-template-columns: 50% 50%;
            margin-bottom: 2%;
        }
        .categoria-content{
            display:flex;
            justify-content:space-between;
            padding: 2%;
            border-radius: 5px;
            background-color: #F0E68C;
            margin:auto;
            margin-bottom: 2% !important;
            width: 70%;
        }
        .buttons-footer{
            display:flex;
            justify-content: space-between;
        }

    </style>

</head>


<div class="categoria-container" style="margin: 3%">
    
    @include('admin.catalogo.infoMessages')
    <div class="categoria-content">   

        <h3 style="text-transform:capitalize">{{$categoria->nombreCategoria}}</h3>
        <div class="buttons-actions">
            
            @include('admin.catalogo.categoria.deleteCategoria', $categoria)
            <a href="/admin/categorias/{{$categoria->id}}/modificar" class="btn btn-dark" role="button" aria-pressed="true">Modificar</a>
        
        </div>

    </div>

    <h2>Subcategorías</h2>

    <div class="subcategorias-content">

        @foreach($subcategorias as $subcategoria)
            <div class="subcategoria-item">
                
                <span style="padding-top: 1%">{{$subcategoria->nombre}}</span>

                <div class="buttons-actions">

                    <a class="btn btn-info" href="/admin/subcategorias/{{$subcategoria->id}}">Productos</a>

                </div>
                
            </div>
        @endforeach

    </div>

    <div class="buttons-footer">
        
        <a class="btn btn-info" style="background-color: #38A641; margin-bottom: 2%" href="/admin/categorias/">Categorias</a>
        {{$subcategorias->links()}}
    </div>
   
</div>

@endsection