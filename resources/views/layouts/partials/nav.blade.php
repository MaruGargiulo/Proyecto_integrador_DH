<nav class="navbar navbar-expand-md navbar-dark fixed-top nav-master">
    <a class="navbar-brand" href=" {{ url('/') }} ">Stickear</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarsExampleDefault">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href=" {{ url('/') }} ">Home<span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Preguntas frecuentes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=" {{ url('/stickers') }} ">Stickers</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=" {{ url('/stickers/create') }} ">Agregar sticker</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="z">Iniciar sesión</a>
        </li>
      </ul>
      <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Quiero encontar..." aria-label="Search">
      </form>
    </div>
</nav>