@extends('template.master')

@section('content')


<div class="container stickers-container">
<div class="album py-5 bg-light">
  <div class="container">
    <div class="row">
      @foreach($stickers as $sticker)
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
            <img src="/storage/{{ $sticker->photopath }}" class="card-img-top sticker-img"  alt="{{ $sticker->album_name }}-{{ $sticker->sticker_number }}">
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