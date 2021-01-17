@extends('admin.catalogo.header')
@section('adminCatalogo')

<div class="addCategoria-container" style="margin: 3% 10%;">

  <div class="card text-center" style="margin: auto">

    <div class="card-header bg-success text-white">
      Añadir Categoria
    </div>

    <form action="{{ action('App\Http\Controllers\Admin\CatalogoController@saveCategoria') }}" id="form" method="POST" role="form">
    {{ csrf_field() }}

      <div class="card-body" style="padding:2% 10%;">
        
        <div class="form-row">

          <div class="input-group">
              
            <div class="input-group-prepend">

              <label class="input-group-text">Nombre</label>

            </div>

            <input type="text" class="form-control @error('nombreCategoria') is-invalid @enderror" name="nombreCategoria" id="nombreCategoria" value="{{ old('nombreCategoria') }}"  placeholder="Nombre" required>

            @error('nombreCategoria')
                <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
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
