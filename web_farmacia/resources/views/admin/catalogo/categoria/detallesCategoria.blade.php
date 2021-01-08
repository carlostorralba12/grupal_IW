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
            grid-template-columns: auto auto;
            margin-bottom: 2%;
        }
        .categoria-content{
            display:flex;
            justify-content:space-between;
            padding: 2%;
            border-radius: 5px;
            background-color: #F0E68C;
            margin:auto;
            width: 50%;
        }
        .buttons-footer{
            display:flex;
            justify-content: space-between;
        }

    </style>

</head>


<div class="categoria-container" style="margin: 3%">
    
    @include('admin.catalogo.messagesSuccess')
    <div class="categoria-content">   

        <h3>{{$categoria->nombre}}</h3>
        <div class="buttons-actions">

            <button type="button" class="btn btn-danger">Eliminar</button>

            @include('admin.catalogo.categoria.updateCategoria', $categoria)

        </div>

    </div>

    <h2>Subcategorías</h2>

    <div class="subcategorias-content">

        @foreach($subcategorias as $subcategoria)
            <div class="subcategoria-item">
                
                <span>{{$subcategoria->nombre}}</span>

                <div class="buttons-actions">

                    <button type="button" class="btn btn-danger">Eliminar</button>
                                        
                    <a class="btn btn-info">Detalles</a>

                </div>
                
            </div>
        @endforeach

    </div>

    <div class="buttons-footer">
        {{$subcategorias->links()}}
        <a class="btn btn-info" style="background-color: #38A641" href="/admin/categorias/">Categorias</a>
    </div>

    <script>
        @error ('nombre')
            $('#updateCategoria').modal('show');
        @enderror
    </script>
   
</div>

@endsection