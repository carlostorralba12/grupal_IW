

<button type="button" class="btn btn-success" data-toggle="modal" data-target="#addCategoria">
    Añadir Categoria
</button>
<!-- Modal -->
<div class="modal fade" id="addCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

  <div class="modal-dialog modal-dialog-centered" role="document">

    <div class="modal-content" id="modalContent">

      <div class="modal-header bg-success text-white">

        <h5 class="modal-title" id="exampleModalLongTitle" style="font-weight:bold;">Añadir Categoría</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true" style="color:white">&times;</span>

        </button>

      </div>
      
      <form action="{{ action('App\Http\Controllers\Admin\Catalogo\CategoriasController@saveCategoria') }}" id="form" method="POST" role="form">
      {{ csrf_field() }}

        <div class="modal-body" id="modalBody">

          <div class="form-group row">

              <label for="nombreCategoria" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

              <div class="col-md-6">
                  <input id="nombreCategoria" type="text" class="form-control" name="nombreCategoria" value="{{ old('nombreCategoria') }}" required>
                 
                  <div id="errorNombreAdd" style="margin-top: 2px; color:red; display:none">
                      <span>El nombre ya está registrado.</span>
                  </div>

                  <script>
                      @error ('nombreCategoria')
                     
                          $('#errorNombreAdd').show();
                      @enderror
                  </script>

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
