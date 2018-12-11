@extends('template.master')

@section('content')

<div class="container">
        <nav class="navbar navbar-expand-lg navbar-light user-nav">
            <div class="user-img-profile col-1">
                <img src="/storage/users-img/users-default-img-profile.png" alt="">
            </div>    
            <div class="collapse navbar-collapse links-usuario" id="navbarNavAltMarkup">
              <div class="navbar-nav">
                <a class="nav-item nav-link active" href="">Mi mochila <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href=" {{ route('stickers.create') }} ">Agregar sticker</a>
                <a class="nav-item nav-link" href="#">Mis intercambios</a>
                <a class="nav-item nav-link" href="#">Configuración</a>
              </div>
            </div>
        </nav>
</div>

<div class="container stickers-container">
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
            </div>  
        <div class="album py-5 bg-light">
          <div class="container">
            <div class="row">
              @foreach($user->stickers as $sticker)
              <div class="col-md-4">
                <div class="card mb-4 box-shadow">
                    <img src="/storage/{{ $sticker->photopath }}" class="card-img-top"  alt="{{ $sticker->album_name }}-{{ $sticker->sticker_number }}">
                <div class="card-body">
                    <h3> {{ $sticker->album_name }} </h3>
                  <p class="card-text"> N° de Figurita: {{ $sticker->sticker_number}} | Precio: ${{ $sticker->price }} </p>
                  <p class="card-text"> De: {{ $sticker->users->name }}</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        <a href=" {{ url("stickers/$sticker->album_name") }} "><button type="button" class="btn btn-sm sticker-show-button-selected">Ver más</button></a>
                        <a href=" {{ url("stickers/$sticker->id/edit") }} "><button type="button" class="btn btn-sm sticker-show-button">Editar</button></a>
                      </div>
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
