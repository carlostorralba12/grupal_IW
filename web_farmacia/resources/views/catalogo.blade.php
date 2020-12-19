
@extends('layouts.app')

@section('content')


<div class="container">
<h2 style="text-align:center">Catálogo</h2>
    <div class="tabla">
        <table>
            <tr>
                @foreach($productos as $juguete)
                <th>
                    <h3>{{$juguete->nombre}}</h3>
                    <p id="precio">{{$juguete->pvp}}€</p>
                    
                </th>
                @endforeach
            </tr>      
        </table>
    </div>
    
</div>

@endsection