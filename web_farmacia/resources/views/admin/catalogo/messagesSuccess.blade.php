@if(!empty($mensaje))
    <div class="alert alert-success" role="alert">

       <span>La categoría: <strong>{{$mensaje}}</strong> ha sido añadida correctamente</span>

        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
        
    </div>
@endif