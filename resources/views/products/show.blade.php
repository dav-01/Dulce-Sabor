@extends('app')


@section('content')



    <div class="container" role="main">
        <div class="card mb-3" >
          <div class="row g-0">
            <div class="col-md-7">
                <img src="https://www.eltiempo.com/files/article_multimedia/uploads/2019/11/08/5dc6093506958.jpeg" alt="" class="card-img-top">
            </div>
            
            <div class="col-md-5">
              <div class="card-body">
                
                <h5 class="card-title">{{$product->name}}</h5>
                <p class="card-text">$ {{$product->price}}</p>
              </div>
            </div>
          
          </div>
        </div>
      </form>
      </div>
      
    @endsection