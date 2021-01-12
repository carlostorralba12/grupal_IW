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
            color:white;
            display:flex;
            justify-content:space-between;
            padding: 2%;
            border-radius: 5px;
            background-color: #1F8577;
            margin:auto;
            width: 50%;
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

        <h3 style="text-transform:capitalize">{{$subcategoria->nombre}}</h3>
        <div class="buttons-actions">

           

        </div>

    </div>

    <h2>Productos</h2>

    <div class="productos-content">

        @foreach($productos as $producto)
            <div class="producto-item">
                
                <span style="padding-top: 1%">{{$producto->nombre}}</span>

                <div class="buttons-actions">

                    <button type="button" class="btn btn-danger">Eliminar</button>
                                        
                    <a class="btn btn-info" href="/admin/subcategorias/{{$subcategoria->id}}">Productos</a>

                </div>
                
            </div>
        @endforeach

    </div>

    <div class="buttons-footer">
        {{$productos->links()}}
        <a class="btn btn-info" style="background-color: #38A641" href="/admin/categorias/">Categorias</a>
    </div>
   
</div>

@endsection