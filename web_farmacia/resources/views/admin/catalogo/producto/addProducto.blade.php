@extends('admin.catalogo.header')
@section('adminCatalogo')

<div class="addproduct-container" style="margin: 3%">

  <div class="card text-center">

    <div class="card-header bg-primary text-white">

      <span style="font-size: 24px">Añadir producto</span>

    </div>

    <form action="{{ action('App\Http\Controllers\Admin\CatalogoController@saveProducto') }}" enctype="multipart/form-data" id="form" method="POST" role="form">
      {{ csrf_field() }}
      <div class="card-body">
      
        <div class="form-row">

          <div class="form-group col-md-6">

            <div class="input-group">
                
              <div class="input-group-prepend">

                <label class="input-group-text">Nombre</label>

              </div>

              <input type="text" class="form-control @error('nombre') is-invalid @enderror"  value="{{ old('nombre') }}" name="nombre" id="nombre" placeholder="Nombre" required>

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

              <input type="text" class="form-control @error('referencia') is-invalid @enderror"  value="{{ old('referencia') }}" name="referencia" id="referencia" placeholder="00000" required>

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

              <input type="text" class="form-control @error('pvp') is-invalid @enderror"  value="{{ old('pvp') }}" name="pvp" placeholder="0.00" required>

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

              <select class="custom-select @error('subcategoriaID') is-invalid @enderror" id="categoriaSelect" name="subcategoriaID"  required>

                <option selected>Selecciona</option>
                @foreach($selectSubcategorias as $subcategoria)
                  <option value='{{$subcategoria->id}}'>{{$subcategoria->nombre}}</option>

                @endforeach
              </select>


              @error('subcategoriaID')
                  <span class="invalid-feedback" role="alert">
                      <strong>Selecciona una subcategoria</strong>
                  </span>
              @enderror

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
              name="descripcionCorta" rows="2" required>{{ old('descripcionCorta') }}</textarea>
              
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
              name="descripcionLarga" rows="3" required>{{ old('descripcionLarga') }}</textarea>


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

            <input type="file" class="custom-file-input @error('imagen') is-invalid @enderror" id="inputGroupFile01" name="imagen" required>
            <label class="custom-file-label" for="inputGroupFile01">Sin archivos...</label>
           
          </div>

          @error('imagen')
              <span class="invalid-feedback" role="alert">
                  <strong>Imagen inválida</strong>
              </span>
          @enderror

        </div>

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