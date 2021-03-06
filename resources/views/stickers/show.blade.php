@extends('template.master')

@section('content')

<div class="container">
    <div class="col-md-4">
      <div class="card mb-4 box-shadow">
        <div class="card mb-4 box-shadow">
            <img src="/storage/{{ $sticker->photopath }}" class="card-img-top sticker-img"  alt="{{ $sticker->album_name }}-{{ $sticker->sticker_number }}">
        <div class="card-body">
        <h3> {{ $sticker->album_name }} </h3>
        <p class="card-text"> {{ $sticker->description }} </p>
        <p class="card-text"> N° de Figurita: {{ $sticker->sticker_number}} | Precio: {{ $sticker->price}} | Categoría: {{ $sticker->category->name}}</p>          
          <div class="btn-group">
            @if(Auth::check())
            <form action=" {{ route('users.trade') }} " method="post">
              @csrf
              <input type="hidden" value=" {{ $sticker->users->id }} " name="owner_id">
              <input type="hidden" value=" {{ $sticker->id }} " name="owner_sticker_id">
              <input type="submit" class="btn btn-sm sticker-show-button-selected" value="Intercambiar" name="trade_requested" >
            </form>
            @endif
            <a href=""><button type="button" class="btn btn-sm sticker-show-button">Comprar</button></a>
          </div>
        </div>        
      </div>
        <a href="/stickers"><button type="button" class="btn btn-sm show-button-return">Volver...</button></a> 
      </div>
    </div>
</div>

@endsection