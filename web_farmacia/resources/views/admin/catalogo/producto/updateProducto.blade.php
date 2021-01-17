@extends('admin.catalogo.header')
@section('adminCatalogo')

<div class="addproduct-container" style="margin: 3%">

  <div class="card text-center">

    <div class="card-header bg-dark text-white">

      <span style="font-size: 24px">Modificar producto</span>

    </div>

    <form action="{{ action('App\Http\Controllers\Admin\CatalogoController@updateProducto', $producto->id) }}" enctype="multipart/form-data" id="form" method="POST" role="form">
      {{ csrf_field() }}
      <div class="card-body">
      
        <div class="form-row">

          <div class="form-group col-md-6">

            <div class="input-group">
                
              <div class="input-group-prepend">

                <label class="input-group-text">Nombre</label>

              </div>

              <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre" id="nombre" placeholder="Nombre" value="{{$producto->nombre}}" required>

              @error('nombre')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

            </div>

          </div>

          <div class="form-group col-md-6">

            <div class="input-group">
                
              <div class="input-group-prepend">

                <label class="input-group-text">Referencia</label>

              </div>

              <input type="text" class="form-control @error('referencia') is-invalid @enderror" name="referencia" id="referencia" placeholder="Referencia" value="{{$producto->referencia}}" required>

              @error('referencia')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

            </div>

          </div>

        </div>

        <div class="form-row">

          <div class="form-group col-md-6">
          
            <div class="input-group">
              
              <div class="input-group-prepend">

                <label class="input-group-text" for="inputPvp">Precio</label>

              </div>

              <input type="text" class="form-control @error('pvp') is-invalid @enderror" name="pvp" placeholder="0.00" value="{{$producto->pvp}}" required>

              <div class="input-group-append">

                <span class="input-group-text">€</span>

              </div>

              @error('pvp')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

            </div>
          
          </div>

          <div class="form-group col-md-6">

            <div class="input-group mb-3">

              <div class="input-group-prepend">

                <label class="input-group-text" for="categoriaSelect">Subcategoria</label>

              </div>

              <select class="custom-select" id="categoriaSelect" name="subcategoriaID"required>
              
                <option selected value='{{$producto->subcategoria_id}}'>{{App\Models\Subcategoria::find($producto->subcategoria_id)->nombre}}</option>
                @foreach($selectSubcategorias as $subcategoria)

                  @if($producto->subcategoria_id != $subcategoria->id)
                    <option value='{{$subcategoria->id}}'>{{$subcategoria->nombre}}</option>
                  @endif

                @endforeach
              </select>
            </div>

          </div>

        </div>

        <div class="form-row">
        
          <div class="form-group col-md-6">

            <div class="input-group">
              
              <div class="input-group-prepend">

                <label class="input-group-text" for="descripcionCorta">Descripción corta</label>

              </div>

              <textarea class="form-control @error('descripcionCorta') is-invalid @enderror" id="descripcionCorta" 
              name="descripcionCorta" rows="2" required>{{$producto->descripcionCorta}}</textarea>

              @error('descripcionCorta')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror


            </div>

          </div>

          <div class="form-group col-md-6">

            <div class="input-group">
                
              <div class="input-group-prepend">

                <label class="input-group-text" for="descripcionLarga">Descripción larga</label>

              </div>

              <textarea class="form-control @error('descripcionLarga') is-invalid @enderror" id="descripcionLarga" 
              name="descripcionLarga" rows="3" required>{{$producto->descripcionLarga}}</textarea>

              @error('descripcionLarga')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ $message }}</strong>
                  </span>
              @enderror

            </div>

          </div>

        </div>

        <div class="input-group mb-3">

          <div class="input-group-prepend">

            <span class="input-group-text">Imagen</span>

          </div>
          
          <div class="custom-file">

            <input type="file" class="custom-file-input @error('imagen') is-invalid @enderror" id="inputGroupFile01" name="imagen">
            <label class="custom-file-label" for="inputGroupFile01">Sin archivos...</label>
            
          </div>

        </div>

        @error('imagen')
            <span class="invalid-feedback" role="alert">
                <strong>Imagen inválida</strong>
            </span>
        @enderror

        <script>
          $('input[type="file"]').change(function(e){
              var fileName = e.target.files[0].name;
              $('.custom-file-label').html(fileName);
          });
        </script>
        
      </div>

      <div class="card-footer text-muted">

        <a id="cancelar" class="btn btn-secondary" href="{{ url()->previous() }}">Cancelar</a>
          <!--button type="button" id="cancelar" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.reload();">Cancelar</button-->
        <button type="submit" class="btn btn-primary">Confirmar</button>

      </div>

    </form>


  </div>

</div>

@endsection