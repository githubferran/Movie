
@extends('layouts.app')
@section('content')
@if(isset($numCoincidencias))
<div class="content-title-movie row">
  <div class="col-8">
    <h2>Listado de peliculas</h2>
  </div >
  <div class="col-4">
    <p class="position-coincidences size-text-coincidences">Hemos encontrado {{$numCoincidencias}} peliculas</p>
  </div>
</div>
@endif
<div class="album-position">
  <div class="album py-5 bg-light-content">
    <div class="container">
      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          @foreach($peliculas as $pelicula)
          <div class="col">
            <div class="card shadow-sm">
              <img widht="1584" height="396" src="{{URL::asset( $pelicula->portada)}}">
              <div class="card-body">
                <div class="row">
                  <div class="col-8">
                    <div class="text-title">
                      <p>{{$pelicula->titulo}}</p>
                    </div>
                  </div>
                  <div class="col-4">
                      <a  href="{{route('ficha_producto', ['id' => $pelicula->id])}}">Ver ficha</a>
                  </div>
                </div>
                <div class="position-description">
                  <p class="card-text">{{$pelicula->descripcion}}</p>
                </div>
              </div>
            </div>
          </div>
          @endforeach
      </div>
    </div>
  </div>
</div>
@endsection
