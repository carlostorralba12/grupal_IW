@extends('admin.catalogo.header')
@section('adminCatalogo')

<div class="addproduct-container" style="margin: 3%">

  <div class="card text-center">

    <div class="card-header bg-primary text-white">

      <span style="font-size: 24px">Añadir producto</span>

    </div>

    <form action="{{ action('App\Http\Controllers\Admin\Catalogo\CatalogoController@saveProducto') }}" id="form" method="POST" role="form">
      {{ csrf_field() }}
      <div class="card-body">
      
        <div class="form-row">

          <div class="form-group col-md-6">

            <div class="input-group">
                
              <div class="input-group-prepend">

                <label class="input-group-text">Nombre</label>

              </div>

              <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required>

            </div>

          </div>

          <div class="form-group col-md-6">

            <div class="input-group">
                
              <div class="input-group-prepend">

                <label class="input-group-text">Referencia</label>

              </div>

              <input type="text" class="form-control" name="referencia" id="referencia" placeholder="Referencia" required>

            </div>

          </div>

        </div>

        <div class="form-row">

          <div class="form-group col-md-6">
          
            <div class="input-group">
              
              <div class="input-group-prepend">

                <label class="input-group-text" for="inputPvp">Precio</label>

              </div>

              <input type="text" class="form-control" name="pvp" placeholder="0.00" required>

              <div class="input-group-append">

                <span class="input-group-text">€</span>

              </div>

            </div>
          
          </div>

          <div class="form-group col-md-6">

            <div class="input-group mb-3">

              <div class="input-group-prepend">

                <label class="input-group-text" for="categoriaSelect">Subcategoria</label>

              </div>

              <select class="custom-select" id="categoriaSelect" name="subcategoriaID" required>

                <option selected>Selecciona</option>
                @foreach($selectSubcategorias as $subcategoria)
                  <option value='{{$subcategoria->id}}'>{{$subcategoria->nombre}}</option>

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

              <textarea class="form-control" id="descripcionCorta" name="descripcionCorta" rows="2" required></textarea>

            </div>

          </div>

          <div class="form-group col-md-6">

            <div class="input-group">
                
              <div class="input-group-prepend">

                <label class="input-group-text" for="descripcionLarga">Descripción larga</label>

              </div>

              <textarea class="form-control" id="descripcionLarga" name="descripcionLarga" rows="3" required></textarea>

            </div>

          </div>

        </div>

        <div class="input-group mb-3">

          <div class="input-group-prepend">

            <span class="input-group-text">Imagen</span>

          </div>
          
          <div class="custom-file">

            <input type="file" class="custom-file-input" id="inputGroupFile01" name="imagen">
            <label class="custom-file-label" for="inputGroupFile01">Sin archivos...</label>
            
          </div>

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