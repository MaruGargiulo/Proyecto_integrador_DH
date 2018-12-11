@extends('template.master')

@section('content')

<div class="container padding-top">
<div class="col-md-4">
    <div class="card mb-4 box-shadow">
      <!--<img class="card-img-top" data-src="holder.js/100px225?theme=thumb&bg=55595c&fg=eceeef&text=Thumbnail" alt="Card image cap">-->
      <div class="card-body">
        <h3> {{ $sticker->album_name }} </h3>
        <p class="card-text"> {{ $sticker->description }} </p>
        <p class="card-text"> N° de Figurita: {{ $sticker->sticker_number}} | Precio: {{ $sticker->price}} | Categoría: {{ $sticker->category->name}}</p>          
        <div class="btn-group">
            <a href=""><button type="button" class="btn btn-sm sticker-show-button-selected">Intercambiar</button></a>
            <a href=""><button type="button" class="btn btn-sm sticker-show-button">Comprar</button></a>
        </div>
        </div>        
    </div>
    <a href="/stickers"><button type="button" class="btn btn-sm show-button-return">Volver...</button></a> 
  </div>
</div>

@endsection