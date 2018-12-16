@extends('template.master')

@section('content')

<div class="container col-8">
<table class="table table-sm">
        <thead>
          <tr>
            <th scope="col">SACAR DE MI MOCHILA</th>            
            <th scope="col">PARA RECIBIR</th>
            <th scope="col">De la mochila de</th>
            <th scope="col">Respuesta</th>
          </tr>
        </thead>
        <tbody>
          @foreach($trades as $trade)
          @if($trade->owner_id == Auth()->user()->id)
          <tr>
            <td scope="row"> El sticker {{ $trade->ownerSticker->sticker_number }} del álbum {{ $trade->ownerSticker->album_name }}</td>
            <td> //N° y album de sticker de {{ $trade->trader->name }} </td>
            <td> {{ $trade->trader->name }} </td>            
            <td> Acepto | No acepto </td>
          </tr>
          @endif
          @endforeach
        </tbody>
      </table>
    </div>

@endsection

