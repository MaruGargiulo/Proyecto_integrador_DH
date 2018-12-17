@extends('template.master')

@section('content')

<div class="container col-8">
    <h3>Stickers de {{ $trader->name }} </h3>
    <ul>
        @foreach($trader->stickers as $sticker)
        <li> La {{ $sticker->sticker_number }} del álbum de {{ $sticker->album_name }}
            <a href=" {{ route('users.mytrades') }} ">
                <span class="badge badge-warning"> Intercambiar </span>
            </a>        
        </li>            
        @endforeach
    </ul>
</div>

@endsection