@extends('template.master')

@section('content')



<div class="container col-6 padding-top">
    <div class="form-group">
        <a href="/stickers"><button type="button" class="btn btn-sm show-button-return">Volver...</button></a> 
    </div>
</div>

<form class="container col-6 form-edit" action="" method="post" enctype="multipart/form-data">
    <h3> Formulario de edición: </h3>
    {{ method_field('PATCH') }}
    @csrf
    <div class="form-group">
        <label for="type">Nombre del álbum</label>
        <input type="text" class="form-control" name="album_name" value="{{ $sticker->album_name }}">
    </div>
    @if($errors->has('album_name'))
    <p class="mensajes-error"> {{ $errors->first('album_name') }}</p>
    @endif
    <div class="form-group">
        <label for="type">Nº de figurita</label>
        <input type="text" class="form-control" name="sticker_number" value="{{ $sticker->sticker_number }}">
    </div>
    @if($errors->has('sticker_number'))
    <p class="mensajes-error"> {{ $errors->first('sticker_number') }}</p>
    @endif
    <!--
    <div class="form-group">
        <label for="type">Precio</label>
        <input type="text" class="form-control" name="price">
    </div>
    -->
    <div class="form-group">
        <label for="type">Categoría</label>
        <select for="type" name="category_id">
            <option value=" {{ $sticker->category->id }} " selected> {{ $sticker->category->name }} </option>
            @foreach($categories as $category)
            <option value=" {{ $category->id }} "> {{ $category->name }} </option>
            @endforeach
        </select>        
    </div>
    @if($errors->has('category_id'))
    <p class="mensajes-error"> {{ $errors->first('category_id') }}</p>
    @endif   
    <div class="form-group">
        <label for="type">Descripción</label>
        <textarea class="form-control" name="description" cols="30" rows="5"> {{ $sticker->description }} </textarea>
    </div>
    @if($errors->has('description'))
    <p class="mensajes-error"> {{ $errors->first('description') }}</p>
    @endif
    <div class="form-group">
        <label for="poster">Imagen</label>
        <input type="file" class="form-control-file" name="photopath">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-warning" value="Guardar cambios">        
    </div>    
</form>
<form class="container col-6 form-edit" action="/stickers/{{ $sticker->id }}" method="post" value="DELETE">
    {{ method_field('DELETE') }}
    {{ csrf_field() }}
    <input type="submit" class="btn btn-danger" value="Eliminar sticker">
</form>


@endsection