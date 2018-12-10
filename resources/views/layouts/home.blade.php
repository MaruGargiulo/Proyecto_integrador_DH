@extends('template.master')

@section('content')
<div class="">
  
  <main role="main" class="slogan">
    <section class="hero">
      <h1 class="titulo">Tu universo de figuritas</h1>
      <p class="subtitulo">Una plataforma que te permite encontrar esas figus imposibles <br> y cambiar todos tus "nola" por un "late".</p>
      <a href="#" class="boton-violeta">Empezá</a>
    </section>

    <div class="container col-10 como-funciona"> 
        <h2> CÓMO FUNCIONA STICKEAR </h2>
      
        <section class="row">
          <div class="col-12">
          <div class="row padding-top">
            <div class="col-md-6 col-sm-12">              
                <img class="iconos-instrucciones" src="storage/icons/account.png" alt="">
                <div class="text">
                  <p><span class="numeros">1.</span>Creá tu cuenta</p>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 instrucciones-par">
                <img class="iconos-instrucciones" src="storage/icons/id-card.png" alt="">
                <div class="text">
                  <p><span class="numeros">2.</span>Empezá a subir a tu mochila
                  las figuritas que querés cambiar</p>
                </div>
              </div>
          </div>
          <div class="row padding-top">
              <div class="col-md-6 col-sm-12">
                <img class="iconos-instrucciones" src="storage/icons/searching.png" alt="">
                <div class="text">
                <p><span class="numeros">3.</span>Buscá las que necesitás en las
                  mochilas de otros usuarios</p>
                </div>  
              </div>
              <div class="col-md-6 col-sm-12 instrucciones-par">
                  <img class="iconos-instrucciones" src="storage/icons/exchange.png" alt="">
                  <div class="text">
                    <p><span class="numeros">4.</span>Si encontrás una que te sirve, y a ese
                    usuario le sirve alguna de tu mochila,
                    ¡hay intercambio!</p>
                  </div>
                </div>
            </div>
            <div class="row padding-top">
                <div class="col-md-6 col-sm-12">
                  <img class="iconos-instrucciones" src="storage/icons/shop.png" alt="">
                  <div class="text">
                    <p><span class="numeros">5.</span>Si no le sirve ninguna, podés
                    comprar la figurita que encontraste</p>
                  </div>
                </div>                
              </div>
          </div> 
        </section>
    </div>

    <div class="preguntas-frecuentes"> 
        <h2> PREGUNTAS FRECUENTES </h2>
      
        <section class="row">
          <div class="col-12">
            <div class="row padding-top">
              <div class="col-md-6 col-sm-12"> 
                  <img src="storage/before-preguntas-frecuentes.png">             
                  <h3 class="pregunta"> ¿Qué necesito para crear mi cuenta? </h3>
                  <div class="respuesta">
                    <p>Llená nuestro formulario con tu nombre,tu email, una contraseña, y listo!</p>
                  </div>
              </div>
              <div class="col-md-6 col-sm-12">
                  <img src="storage/before-preguntas-frecuentes.png">               
                  <h3 class="pregunta"> ¿Qué medios de pago usan? </h3>
                  <div class="respuesta">
                    <p>Tenemos habilitado el pago online de tarjetas de crédito y débtio.</p>
                  </div>
              </div>
            </div>
            <div class="row padding-top">
                <div class="col-md-6 col-sm-12">
                    <img src="storage/before-preguntas-frecuentes.png">               
                    <h3 class="pregunta"> ¿Cómo arreglo el intercambio? </h3>
                    <div class="respuesta">
                      <p>Directamente con el usuario que vayas a hacer la transacción.</p>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12">
                    <img src="storage/before-preguntas-frecuentes.png">             
                    <h3 class="pregunta"> ¿Cuántos stickers puedo subir? </h3>
                    <div class="respuesta">
                      <p>¡Los que quieras! Tu mochila no tiene límites.</p>
                    </div>
                </div>
              </div>
              <div class="row padding-top">
                  <div class="col-md-6 col-sm-12">
                      <img src="storage/before-preguntas-frecuentes.png">              
                      <h3 class="pregunta"> ¿Hace falta intercambiar sí o sí? </h3>
                      <div class="respuesta">
                        <p>No. También podés comprar el sticker si al otro usuario no le sirve ninguna de 
                        las tuyas.</p>
                      </div>
                  </div>
                  <div class="col-md-6 col-sm-12">
                      <img src="storage/before-preguntas-frecuentes.png">              
                      <h3 class="pregunta"> ¿Cómo crearon esta plataforma? </h3>
                      <div class="respuesta"><p>Con todo lo que aprendimos en Digital House.</p>
                      </div>
                  </div>
                </div>
          
          </div> 
        </section>
    </div>
    

  </main>
  
</div>

@endsection