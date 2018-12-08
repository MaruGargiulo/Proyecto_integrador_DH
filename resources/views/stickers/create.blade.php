@extends('template.master')

@section('content')

<form class="container col-6 sticker-show-card" action="" method="post" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <label for="type">Nombre del álbum</label>
        <input type="text" class="form-control" name="album_name" value="{{ old("album_name") }}">
    </div>
    @if($errors->has('album_name'))
    <p class="mensajes-error"> {{ $errors->first('album_name') }}</p>
    @endif
    <div class="form-group">
        <label for="type">Nº de figurita</label>
         <input type="text" class="form-control" name="sticker_number" value="{{ old("sticker_number") }}">
    </div>
    @if($errors->has('sticker_number'))
    <p class="mensajes-error"> {{ $errors->first('sticker_number') }}</p>
    @endif 
    <div class="form-group">
        <label for="type">Precio</label>
        <input type="text" class="form-control" name="price">
    </div>
    <div class="form-group">
        <label for="type">Categoría</label>
        <select for="type" name="category_id">
            <option value="" selected disabled> seleccionar </option>
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
        <textarea class="form-control" name="description" cols="30" rows="5"> {{ old('description') }} </textarea>
    </div>
    @if($errors->has('description'))
    <p class="mensajes-error"> {{ $errors->first('description') }}</p>
    @endif
    <div class="form-group">
        <label for="poster">Imagen</label>
        <input type="file" class="form-control-file" name="photopath">
      </div>
    <div class="form-group">
        <input type="submit" class="btn btn-dark" value="Subir figurita">
    </div>
  </form>
</div>


@endsection