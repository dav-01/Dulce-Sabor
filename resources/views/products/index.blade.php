<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
    <h1 class="text-center">Dulce Sabor</h1>


    <section id="gallery">
        <div class="container">
          <div class="row">
            @foreach($products as $product)
            <div class="col-lg-4 mb-4">
              <a href="{{route('product.show', $product)}}" style="text-decoration: none ">
              <div class="card">
                <img src="https://www.eltiempo.com/files/article_multimedia/uploads/2019/11/08/5dc6093506958.jpeg" alt="" class="card-img-top">
                <div class="card-body">
                  <h5 class="card-title">Nombre: {{$product->name}}</h5>
                  <h5 class="card-title">Precio: {{$product->price}}</h5>
                  <h5 class="card-title">Cantidad: {{$product->quiality}}</h5>
                  <a href="{{ route('product.edit', $product->id) }}">Editar</a> <br>
                  <form action="{{ route('product.destroy', $product->id) }}" method ="POST" >
                    @csrf
                    {{ method_field('DELETE') }}
                    <input type="submit" value="Eliminar" onclick="return EliminarRegistro('Eliminar Profesor')">
                    </form>
                </div>
                
              </div>
              
            </a>

            
            </div>
            @endforeach
          </div>
        </div>
      </section> 

</body>
</html>