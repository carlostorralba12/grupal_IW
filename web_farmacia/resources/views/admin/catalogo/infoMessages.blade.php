@if($categoriaAdded != null )
    <div class="alert alert-success" role="alert">

       <span>La categoría: <strong>{{$categoriaAdded->nombreCategoria}}</strong> ha sido añadida correctamente. 
        <a href="/admin/categorias/{{$categoriaAdded->id}}" class="alert-link">Picha aquí</a>
        para ver sus detalles
       </span>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        
    </div>
@endif

@if($subCategoriaAdded != null)
    <div class="alert alert-success" role="alert">

       <span>La subcategoría: <strong>{{$subCategoriaAdded->nombre}}</strong> ha sido añadida correctamente. 
        <a href="/admin/subcategorias/{{$subCategoriaAdded->id}}" class="alert-link">Picha aquí</a>
        para ver sus detalles
       </span>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        
    </div>
@endif

@if($productoAdded != null)
    <div class="alert alert-success" role="alert">

       <span>El producto: <strong>{{$productoAdded->nombre}}</strong> ha sido añadido correctamente. 
        <a href="/admin/productos/{{$productoAdded->id}}" class="alert-link">Picha aquí</a>
        para ver sus detalles
       </span>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        
    </div>
@endif

@if(!empty($mensajeUpdateCategoria))
    <div class="alert alert-secondary" role="alert">

       <span>La categoría ha sido modificada correctamente.</span>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        
    </div>
@endif

@if(!empty($mensajeUpdatesubCategoria))
    <div class="alert alert-secondary" role="alert">

       <span>La subcategoría ha sido modificada correctamente.</span>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        
    </div>
@endif


@if(!empty($mensajeUpdateProducto))
    <div class="alert alert-secondary" role="alert">

       <span>El producto ha sido modificado correctamente.</span>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        
    </div>
@endif


@if(!empty($deleteCategoriaMessage))
    <div class="alert alert-danger" role="alert">

       <span>La categoría: <strong>{{$deleteCategoriaMessage}}</strong> ha sido eliminada correctamente.</span>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        
    </div>
@endif

@if(!empty($deleteSubcategoriaMessage))
    <div class="alert alert-danger" role="alert">

       <span>La subcategoría: <strong>{{$deleteSubcategoriaMessage}}</strong> ha sido eliminada correctamente.</span>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        
    </div>
@endif

@if(!empty($deleteProductoMessage))
    <div class="alert alert-danger" role="alert">

       <span>El producto: <strong>{{$deleteProductoMessage}}</strong> ha sido eliminado correctamente.</span>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        
    </div>
@endif