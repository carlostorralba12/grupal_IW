@extends('admin.catalogo.header')
@section('adminCatalogo')


<div class="updateSubcategoria-container" style="margin: 3% 10%;">

    <div class="card text-center" style="margin: auto">

        <div class="card-header bg-dark text-white">
            Modificar Subcategoria
        </div>

        <form action="{{ action('App\Http\Controllers\Admin\CatalogoController@updateSubcategoria', $subcategoria->id) }}" id="form" method="POST" role="form">
        {{ csrf_field() }}

            <div class="card-body" style="padding:2% 10%;">

                <div class="form-row" style="margin: 2%;">

                    <div class="input-group">

                        <div class="input-group-prepend">

                            <label class="input-group-text">Nombre</label>

                        </div>

                        <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" id="nombre" value="{{ $subcategoria->nombre }}"  placeholder="Nombre" required>

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

                        <select class="custom-select" id="categoriaSelect" name="categoriaID" required>

                            <option selected value='{{$subcategoria->categoria_id}}'>{{App\Models\Categoria::find($subcategoria->categoria_id)->nombreCategoria}}</option>
                            @foreach($selectCategorias as $categoria)
                                @if($subcategoria->categoria_id != $categoria->id)
                                <option value='{{$categoria->id}}'>{{$categoria->nombreCategoria}}</option>
                                @endif

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
            
                <a id="cancelar" class="btn btn-secondary" href="/admin/subcategorias/{{ $subcategoria->id }}">Cancelar</a>
                <button type="submit" class="btn btn-primary">Confirmar</button>

            </div>

        </form>

    </div>
    
</div>

@endsection