

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
            grid-template-columns: auto auto;
            margin-bottom: 2%;
        }

    </style>

</head>


<div class="categorias-container" style="margin: 3%">

    @include('admin.catalogo.messagesSuccess')
    <h2>Categorías</h2>

    <div class="categorias-content">

        @foreach($categorias as $categoria)
            <div class="categoria-item">
                
                <span>{{$categoria->nombre}}</span>

                <div class="buttons-actions">

                    <button type="button" class="btn btn-danger">Eliminar</button>

                    <span>{{$categoria->id}}</span>
                    {{--@include('admin.catalogo.categoria.updateCategoria', ['categoria' => $categoria])--}}
                    @component('admin.catalogo.categoria.updateCategoria', ['categoria' => $categoria])
                    @endcomponent

                    <button type="button" class="btn btn-dark" data-toggle="modal" data-target="#updateCategoria">
                        Modificar
                    </button>
                                        
                    <button type="button" class="btn btn-info">Detalles</button>

                </div>
                
            </div>
        @endforeach

    </div>
    {{$categorias->links()}}

    <script>
        @error ('nombre')
            $('#addCategoria').modal('show');
        @enderror
    </script>

</div>
@endsection