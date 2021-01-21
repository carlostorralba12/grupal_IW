
@extends('layouts.app')

@section('content')

<head>

    <style>

        .scrollbar{
            text-transform: capitalize;
            height: 65vh;
            overflow-y: scroll;
        }
        .total-importe{
            padding: 1%;
            background-color: #78c1e3;
            border-radius: 5px;
        }
        .image-product{
        
            width: 20%;
        }
        .header-producto{
            margin: 2% 0;
            display: flex;
            justify-content: space-around;

        }
        .footer-producto{

            display: flex;
            justify-content: space-between;
           
        }

        .pvp{
           
            background-color: #5cae51;
            border-radius: 50%;
            padding: 1%;
        }
        .cantidad-content{
            width: 40%;
            height: 30%;
            display: flex;
            flex-direction: row;
        }
        .cantidad{
            
            background-color: #d4e6da;
            border-radius: 5px;
            padding: 2%;

        }
        .card-producto-header{
            display: flex;
            justify-content: space-between;
        }
        .sin-productos{
            border: 1px solid #e8e8e8;
            border-radius: 5px;
            padding:7% 5%;
            background-color: rgb(0, 255, 255);
            box-shadow: 5px 10px 18px #888888;
            text-transform: none;
            text-align: center;
            margin: 20% 15%;
        }

    </style>

</head>

<div class="container">

    <div class="carrito-container" style="width: 80%; margin: auto">

        @if(session('producto'))
            <div class="alert alert-success" role="alert">

            <span>El producto: <strong>{{session('producto')->nombre}}</strong> se ha añadido al carrito. 
                <a href="/catalogo/productos/{{session('producto')->id}}" class="alert-link">Picha aquí</a>
                para ver sus detalles
            </span>

                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                
            </div>
        @endif



        <div class="card">

            <div class="card-header" style="font-size: 25px;">
                <span><b>Carrito <i class="fa fa-shopping-cart" aria-hidden="true"></i></b></span>
            </div>

            <div class="card-body">

            <div class="productos-container scrollbar">

                @if(count($productos) < 1)
                    <div class="sin-productos">
                        <h4>Tu cesta está vacía añade productos del <b>catálogo</b>.</h4>
                        <a class="btn btn-info" style="margin: 3%;" href="/catalogo"><i class="fa fa-shopping-basket" aria-hidden="true"></i> Catálogo</a>
                    </div>
                   
                @else
                @for($i = 0; $i < count($productos); $i++)
                <div class="card" style="margin: 2% 4%;">

                    <div class="card-header card-producto-header">

                        <span style="padding-top: 1%;"><b>{{$productos[$i]->nombre}}</b></span>
                        <a class="btn btn-warning" href="/carrito/producto/eliminar/{{$productos[$i]->id}}">Quitar del carrito</a>

                    </div>

                    <div class="card-body">

                        <div class="header-producto">

                            <img src="{{asset('images/productos/'. $productos[$i]->imagen)}}" class="image-product">
                            <span style="margin: auto 0;">{{$productos[$i]->descripcionCorta}}</span>

                        </div>

                        <div class="footer-producto">

                            <div class="cantidad-content">
                                @if($cantidades[$i] > 1)
                                    <a class="btn btn-danger" style="padding: 2%; margin-right: 1%;" href="/carrito/cantidad/eliminar/{{$productos[$i]->id}}">-</a>
                                @endif
                                <span class="cantidad">Cantidad: <b>{{$cantidades[$i]}}</b></span>
                                <a class="btn btn-primary" style="padding: 2%; margin-left: 1%" href="/carrito/cantidad/añadir/{{$productos[$i]->id}}">+</a>

                            </div>
                            
                            <span class="pvp">{{$productos[$i]->pvp}} €</span>
                            

                        </div>
                       
                    </div>
                </div>
                @endfor
                @endif
            </div>

            </div>

            <div class="card-footer">

                <div style="display: flex; justify-content: space-between;">
                @if(count($productos) > 1)
                    <div style="text-align: left; width: 50%;">
                  
                        <span style="font-size: 20px;"><b>Total: </b></span>

                        <span class="total-importe">{{App\Http\Controllers\CarritoController::calcularTotal($productos, $cantidades)}} €</span>
                    
                    </div>

                    <div style="text-align: right; width: 50%">

                        <a type="button" class="btn btn-primary" href="/carrito/comprar">Comprar</a>

                    </div>
                @endif
                </div>
              
            </div>
            
        </div>
            
    </div>


</div>


@endsection