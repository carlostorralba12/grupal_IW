

@extends('admin.catalogo.header')
@section('adminCatalogo')
<head>
    <style>

        .categoria-item{
            font-size: medium;
            margin: 1%;
            text-transform: capitalize;
            display:flex;
            justify-content: space-between;
            padding: 3%;
            background-color: #F0E68C;
            border-radius: 5px;
        }
        .categorias-content{
            display: grid;
            grid-template-columns: 50% 50%;
            margin-bottom: 2%;
        }

    </style>

</head>


<div class="categorias-container" style="margin: 3%">

    @include('admin.catalogo.infoMessages')
    <h2>Categorías</h2>

    <div class="categorias-content">

        @foreach($categorias as $categoria)
            <div class="categoria-item">
                
                <span style="padding-top: 1%">{{$categoria->nombreCategoria}}</span>

                <div class="buttons-actions">
                                        
                    <a class="btn btn-info" href="/admin/categorias/{{$categoria->id}}">Subcategorías</a>

                </div>
                
            </div>
        @endforeach

    </div>
    {{$categorias->links()}}
</div>
@endsection