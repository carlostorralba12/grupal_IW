@extends('admin.catalogo.header')
@section('adminCatalogo')

<head>
    <style>

        .producto-item{
            font-size: medium;
            margin: 1%;
            text-transform: capitalize;
            display:flex;
            justify-content: space-between;
            padding: 3%;
            color:white;
            background-color: #967bf7;
            border-radius: 5px;
        }
        .productos-content{
            display: grid;
            grid-template-columns: 50% 50%;
            margin-bottom: 2%;
        }
        .subcategoria-content{
            display:flex;
            justify-content:space-between;
            padding: 2%;
            border-radius: 5px;
            background-color: #1F8577;
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


<div class="subcategorias-container" style="margin: 3%">
    
    @include('admin.catalogo.infoMessages')
    <div class="subcategoria-content">   

        <h3 style="text-transform:capitalize; color:white;">{{$subcategoria->nombre}}</h3>
        <div class="buttons-actions">

            @include('admin.catalogo.subcategoria.deleteSubcategoria', $subcategoria)
            <a href="/admin/subcategorias/{{$subcategoria->id}}/modificar" class="btn btn-dark" role="button" aria-pressed="true">Modificar</a>

        </div>

    </div>

    <h2>Productos</h2>

    <div class="productos-content">

        @foreach($productos as $producto)
            <div class="producto-item">
                
                <span style="padding-top: 1%">{{$producto->nombre}}</span>

                <div class="buttons-actions">
                                        
                    <a class="btn btn-info" href="/admin/productos/{{$producto->id}}">Detalles</a>

                </div>
                
            </div>
        @endforeach

    </div>

    <div class="buttons-footer">
       
        <a class="btn btn-info" style="background-color: #89f07f; text-transform: capitalize; margin-bottom: 2%;" href="/admin/categorias/{{$subcategoria->categoria_id}}">
  
            {{App\Models\Categoria::find($subcategoria->categoria_id)->nombreCategoria}}
        </a>
        {{$productos->links()}}
    </div>
   
</div>

@endsection