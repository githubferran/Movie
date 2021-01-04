@extends('layouts.app')
@section('links')
<link href="https://getbootstrap.com/docs/5.0/examples/album/"  rel="canonical" >
<link href="{{ asset('./bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{ asset('./dashboard/css/dashboard.css') }}" rel="stylesheet">
@endsection
@section('content') 
  <div class="d-md-flex flex-md-equal w-100 my-md-3 ps-md-3">
    <div class="content-row row">
      <div class="col-6">
        <div class="content-box bg-dark me-md-3 pt-3 px-3 text-center text-white overflow-hidden">
            <h2 class="display-5">{{$pelicula->titulo}}</h2>
            <div class=" row">
              <div class="aditional-info-left col-6">
                {{$pelicula->categoria->nombre}}
              </div>
              <div class="aditional-info-right col-6">
                <div class="row">
                  <div class="col-6">
                    {{$pelicula->año}}
                  </div>
                  <div class="col-6">
                    {{ $pelicula->valoracion}}
                  </div>
                </div>
              </div> 
            </div>
            <div> 
              <img class="content-portada" src="{{URL::asset( $pelicula->portada)}}">
            </div>
        </div>  
      </div>
      <div class=" col-6">
        <div class="content-box bg-light me-md-3 overflow-hidden">
          <div >
            <div>
              <iframe class="content-iframe" src="{{$pelicula->trailer}}">
              </iframe>
            </div>
            <div class="content-iframe-description">
              <h4>Descripción</h4>
              <div>
                <p class="content-descripcion" >{{$pelicula->descripcion}}</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
<footer class=" py-5">
  <h5 class="content-title-related-movie">Peliculas Relacionadas</h5>
  <div class="row">
    @foreach($peliculasRelacionadas as $peliculaRelacionada)
      <div class="content-relation-image col-6 col-md">
        <img  width="179" height="235" src="{{URL::asset($peliculaRelacionada->portada)}}">
      </div>
    @endforeach
    
  </div>
</footer>
@endsection