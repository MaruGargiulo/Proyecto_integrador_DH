@extends('template.master')

@section('content')

<div class="container sticker-index">
<div class="album py-5 bg-light">
  <div class="container">
    <div class="row">
      @foreach($stickers as $sticker)
      <div class="col-md-4">
        <div class="card mb-4 box-shadow">
          <!--<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">-->
          <div class="card-body">
            <h3> {{ $sticker->album_name }} </h3>
          <p class="card-text"> N° de Figurita: {{ $sticker->sticker_number}} | Precio: $20  </p>
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