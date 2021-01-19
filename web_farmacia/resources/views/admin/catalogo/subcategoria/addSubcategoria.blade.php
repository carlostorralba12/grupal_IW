@extends('admin.catalogo.header')
@section('adminCatalogo')


<div class="addSubcategoria-container" style="margin: 3% 10%;">

    <div class="card text-center" style="margin: auto">

        <div class="card-header bg-secondary text-white">
            Añadir Subcategoria
        </div>

        <form action="{{ action('App\Http\Controllers\Admin\CatalogoController@saveSubcategoria') }}" id="form" method="POST" role="form">
        {{ csrf_field() }}

            <div class="card-body" style="padding:2% 10%;">

                <div class="form-row" style="margin: 2%;">

                    <div class="input-group">

                        <div class="input-group-prepend">

                            <label class="input-group-text">Nombre</label>

                        </div>

                        <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" id="nombre" value="{{ old('nombre') }}"  placeholder="Nombre" required>

                        @error('nombre')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror

                    </div>

                </div>
                            
                <div class="form-row">

                    <div class="input-group">

                        <div class="input-group-prepend">

                            <label class="input-group-text" for="categoriaSelect">Categoria</label>

                        </div>

                        <select class="custom-select @error('categoriaID') is-invalid @enderror"" id="categoriaSelect" name="categoriaID" required>

                            <option selected>Selecciona</option>
                            @foreach($selectCategorias as $categoria)
                            <option value='{{$categoria->id}}'>{{$categoria->nombreCategoria}}</option>

                            @endforeach
                        </select>

                        @error('categoriaID')
                            <span class="invalid-feedback" role="alert">
                                <strong>Selecciona una categoria</strong>
                            </span>
                        @enderror


                    </div>

                </div> 


            </div>

            <div class="card-footer text-muted">
            
                <a id="cancelar" class="btn btn-secondary" href="{{ url()->previous() }}">Cancelar</a>
                <button type="submit" class="btn btn-primary">Confirmar</button>

            </div>

        </form>

    </div>
    
</div>

@endsection