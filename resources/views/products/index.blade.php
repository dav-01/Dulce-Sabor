@extends('app')


@section('content')

<a class="btn btn-warning" href="{{ route('product.create') }}">Nuevo Dulce
    <i class="fa fa-edit"></i>
</a>
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
                  <a class="btn btn-warning" style="display: inline-block" href="{{ route('product.edit', $product) }}">Editar
                    <i class="fa fa-edit"></i>
                </a>
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

@endsection