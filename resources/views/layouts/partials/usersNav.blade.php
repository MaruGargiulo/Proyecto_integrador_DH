<div class="container">
    <nav class="navbar navbar-expand-lg navbar-light user-nav">
        <div class="user-img-profile col-1">
            <img src="/storage/users-img/users-default-img-profile.png" alt="">
        </div>
        @if(Auth::user()->role === 1)    
        <div class="collapse navbar-collapse links-usuario" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            @if(Request::is('users/home'))
            <a class="nav-item nav-link active" href=" {{ route('users.home') }} ">Mi mochila</a>
            @else
            <a class="nav-item nav-link" href=" {{ route('users.home') }} ">Mi mochila</a>
            @endif
            @if(Request::is('stickers/create'))
            <a class="nav-item nav-link active" href=" {{ route('stickers.create') }} ">Agregar sticker</a>
            @else
            <a class="nav-item nav-link" href=" {{ route('stickers.create') }} ">Agregar sticker</a>
            @endif
            <a class="nav-item nav-link" href="#">Mis intercambios</a>
            <a class="nav-item nav-link" href="">Configuración</a>
          </div>         
        </div>
        @endif 
    </nav>
</div>