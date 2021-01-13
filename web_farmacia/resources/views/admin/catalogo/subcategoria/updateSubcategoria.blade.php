
<button type="button" class="btn btn-dark" data-toggle="modal" data-target="#updateSubcategoria">
    Modificar
</button>
<!-- Modal -->
<div class="modal fade" id="updateSubcategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

  <div class="modal-dialog modal-dialog-centered" role="document">

    <div class="modal-content">

      <div class="modal-header bg-dark text-white">

        <h5 class="modal-title" id="exampleModalLongTitle">Modificar Subcategoría</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true" style="color:white">&times;</span>

        </button>

      </div>

      <form action="{{ action('App\Http\Controllers\Admin\Catalogo\CatalogoController@updateSubcategoria', $subcategoria->id) }}" id="form" method="POST" role="form">
      {{ csrf_field() }}

        <div class="modal-body" id="modalBody">

          <div class="form-group row">

              <label for="nombre" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

              <div class="col-md-6">
                  <input id="nombre" type="text" class="form-control" name="nombre" value="{{ $subcategoria->nombre }}" required>

              </div>

          </div>
          <div class="form-group row">

            <div class="input-group mb-3" style="margin: 0 15%;">

              <div class="input-group-prepend">

                <label class="input-group-text" for="categoriaSelect">Categoria</label>

              </div>

              <select class="custom-select" id="categoriaSelect" name="categoriaID" required>

                <option selected>Selecciona</option>
                @foreach($selectCategorias as $categoria)
                  <option value="{{$categoria->id}}">{{$categoria->nombreCategoria}}</option>

                @endforeach
              </select>
            </div>
          </div> 

        </div>

        <div class="modal-footer">
          
          <button type="button" id="cancelar" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
          <!--button type="button" id="cancelar" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.reload();">Cancelar</button-->
          <button type="submit" class="btn btn-primary">Confirmar</button>

        </div>

      </form>


    </div>

  </div>
  
</div>
