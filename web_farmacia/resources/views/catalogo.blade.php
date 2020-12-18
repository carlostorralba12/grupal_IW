


<title>Catalogo</title>
<h3></h3>
<div id="principal">

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
