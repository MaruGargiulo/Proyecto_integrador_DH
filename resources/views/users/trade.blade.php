@extends('template.master')

@section('content')

<div class="container col-9">
<table class="table table-sm">
        <thead>
          <tr>
            <th scope="col">SACAR DE MI MOCHILA</th>            
            <th scope="col">PARA RECIBIR</th>
            <th scope="col">Elegir de la mochila de</th>
            <th scope="col">Respuesta</th>
          </tr>
        </thead>
        <tbody>
          @foreach($trades as $trade)
          @if($trade->owner_id == Auth()->user()->id && $trade->tradeNotify == 1)
          <tr>
            <td scope="row"> El sticker {{ $trade->ownerSticker->sticker_number }} del álbum {{ $trade->ownerSticker->album_name }}</td>
            @if(isset($trader_sticker))
            <td> El sticker {{ $trader_sticker->sticker_number }} del álbum {{ $trader_sticker->album_name }} </td>
            @else
            <td> <i>falta seleccionar sticker </i> </td>
            @endif
            @if(isset($trader_sticker))
            <td> {{ $trade->trader->name }} </td>
            @else
            <td> <a href="/users/traderStickers/{{ $trade->trader->id }} "> {{ $trade->trader->name }} </a></td>           
            @endif
            @if(isset($trader_sticker))
            <td><form action="/users/tradesuccess" class="" method="post"> <!-- STORE CAMBIOS EN LOS STICKERS DE LOS DUEÑOS Y BORRAR LA FILA DE TRADES -->
              {{ method_field('PATCH') }}
              @csrf
              <input type="hidden" value=" {{ $trader_sticker->id }} " name="trader_sticker_id">
              <input type="hidden" value=" {{ $trade->ownerSticker->id }} " name="owner_sticker_id">
              <input type="hidden" value=" {{ $trade->id }} " name="trade_id">
              <input type="submit" value="Acepto">
            </form></td>
            <td><form action="" class=""> <!-- BORRAR FILA DE TRADES -->
                {{ method_field('DELETE') }}
                {{ csrf_field() }}
                <input type="submit" value="No acepto">
            </form></td>
            @else
            <td> Acepto | No acepto </td>
            @endif
          </tr>
          @endif
          @endforeach
        </tbody>
      </table>
    </div>

@endsection

