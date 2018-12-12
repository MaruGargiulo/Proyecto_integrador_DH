@extends('template.master')

@section('content')

<div class="padding-top container padding-bottom">
    <h3>Lista de usuarios</h3>
    <div class="col-4">
        <ul class="list-group">
            @foreach($users as $user)
            <li class="list-group-item d-flex justify-content-between align-items-center">
            {{ $user->name }}
            <span class="badge badge-primary badge-pill"> {{ $user->stickers->count() }}  Stickers</span>
            </li>
            @endforeach            
        </ul>
    </div>
    {{ $users->links() }}
</div>
@endsection