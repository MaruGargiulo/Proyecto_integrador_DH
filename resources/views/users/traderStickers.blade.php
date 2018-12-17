@extends('template.master')

@section('content')

<div class="container col-8">
    <h3>Stickers de {{ $trader->name }} </h3>
    <ul>
        @foreach($trader->stickers as $sticker)
        <li> La {{ $sticker->sticker_number }} del álbum de {{ $sticker->album_name }} </li> 
            <form action="{{ route('users.saveSticker') }}" method="post">
                @csrf
                <input type="hidden" value=" {{ $sticker->id }} " name="trader_sticker_id">
                <input type="submit" class="btn btn-sm btn-warning" value="Intercambiar" name="trade_requested" >
            </form>        
                   
        @endforeach
    </ul>
</div>

@endsection