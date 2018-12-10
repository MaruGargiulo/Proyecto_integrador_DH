@extends('template.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"> Este es el perfil de {{ $user->name }}</div>
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    Estas son mis figus:
                    @foreach($user->stickers as $sticker)
                        @if($sticker->album_name !== '')
                    <p> {{ $sticker->album_name }} </p>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
