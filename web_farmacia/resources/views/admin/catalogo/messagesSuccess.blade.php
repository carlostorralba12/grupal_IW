@if($categoriaAdded != null )
    <div class="alert alert-success" role="alert">

       <span>La categoría: <strong>{{$categoriaAdded->nombre}}</strong> ha sido añadida correctamente. 
        <a href="/admin/categorias/{{$categoriaAdded->id}}" class="alert-link">Picha aquí </a>
        para ver sus detalles
       </span>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        
    </div>
@endif

@if(!empty($mensajeUpdateCategoria))
    <div class="alert alert-secondary" role="alert">

       <span>La categoría: <strong>{{$mensajeUpdateCategoria}}</strong> ha sido modificada correctamente.</span>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        
    </div>
@endif