@extends('layouts.app')

@section('content')


    <ul>Categorias de Figuritas</ul>
    <ul>
        @foreach($categories as $category)
        <li>{{ $category->name }}</li>
        @endforeach
    </ul>

@endsection