<button type="button" class="btn btn-danger" data-toggle="modal" data-target="#deleteCategoria">
    Eliminar
</button>

<!-- Modal -->
<div class="modal fade" id="deleteCategoria" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">

  <div class="modal-dialog modal-dialog-centered" role="document">

    <div class="modal-content" id="modalContent">

      <div class="modal-header bg-danger text-white">

        <h5 class="modal-title" id="exampleModalLongTitle" style="font-weight:bold;">Eliminar Categoría</h5>

        <button type="button" class="close" data-dismiss="modal" aria-label="Close">

          <span aria-hidden="true" style="color:white">&times;</span>

        </button>

    </div>

    <div class="modal-body" id="modalBody" style="text-align: center">

      <h5 style="margin:0">¿Quieres eliminar la categoría: <b>{{$categoria->nombreCategoria}} </b>?</h5>
      <small><b>*Borrarás todas las subcategorías y productos contenidos*</b></small>

    </div>

    <div class="modal-footer">
        
        <button type="button" id="cancelar" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
        <form action="{{ action('App\Http\Controllers\Admin\Catalogo\CategoriasController@deleteCategoria', $categoria->id) }}" id="form" method="POST" role="form">

            {{ csrf_field() }}
            <!--button type="button" id="cancelar" class="btn btn-secondary" data-dismiss="modal" onclick="window.location.reload();">Cancelar</button-->
            <button type="submit" class="btn btn-primary">Confirmar</button>

        </form>

    </div>


    </div>

  </div>

</div>
