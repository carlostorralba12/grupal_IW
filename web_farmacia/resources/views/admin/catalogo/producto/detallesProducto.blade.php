@extends('admin.catalogo.header')
@section('adminCatalogo')

<head>

  <style>

      .image-product{
        
        width: 30%;

      }
      .producto-header{
        display: flex;
        justify-content: space-between;
        background-color: #DFE6EB;
        color: #3490dc;
      }
      .producto-titulo{
        text-transform: capitalize;
        font-size: 24px;
        font-weight: bold;
       
      }
      .importe-producto{
        float: right;
        background-color: #A8F39E;
        border-radius: 5px;
        padding: 1%;
        font-size: 16px;
        font-weight: bold;
      }

      .datos-productos{
        width: 100%;
        display: flex;
        flex-direction: column;

      }

      .productos-descripcion{
        margin: 3%;
        display: flex;
        flex-direction: column;
      }


  </style>

</head>

<div class="producto-container"style="margin: 3% 10%">
      
      <div class="card">

        <div class="card-header producto-header">

          <span class="producto-titulo">{{$producto->nombre}}</span>
          <span style="margin: auto 0;"><b>Referencia: </b> #{{$producto->referencia}}</span>

        </div>


        <div class="card-body"> 

          <div style="display: flex; margin: 0 auto">
            <!--img src="{{asset('images/productos/'. $producto->imagen)}}"-->
          
            <img src="{{asset('images/productos/'. $producto->imagen)}}" class="image-product">
         

            <div class="datos-productos">
              
              <div class="productos-descripcion">

                <span style="font-size: 18px;"><b>Descripción breve</b></span>
                <span>{{$producto->descripcionCorta}}.</span>

                <span style="font-size: 18px; margin-top: 2%"><b>Descripción detallada</b></span>
                <span>{{$producto->descripcionLarga}}.</span>


              </div>

            </div>
        
          </div>
          <div style="margin: auto 0 0 0;">

              <span class="importe-producto">{{$producto->pvp}} €</span>

          </div>
        
        </div>

        <div class="card-footer text-muted" style="text-align: right;">
      
          <button class="btn btn-danger">Eliminar</button>
          <a class="btn btn-dark">Modificar</a>

        </div>


      </div>

</div>

@endsection