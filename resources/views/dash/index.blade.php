@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
<nav class="navbar navbar-expand-lg bg-dark navbar-dark">
    <img src="./img/logo3.png" alt="" width="100"> 
<div class="container">
  <a class="navbar-brand" href="{{ url("/dash")}}">Biblioteca Virtual</a>
  <button
    class="navbar-toggler"
    type="button"
    data-bs-toggle="collapse"
    data-bs-target="#navbarNav"
    aria-controls="navbarNav"
    aria-expanded="false"
    aria-label="Toggle navigation"
  >
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav ms-auto">
      <li class="nav-item">
        <a class="nav-link" href="{{ url("/dash")}}">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/libros">Libros</a>
      </li>
          </ul>
  </div>
</div>
</nav>
@stop

@section('content')
<div class="container  align-items-center">
    <div class="card bg-ligth textw-white text-center">
<div class="text-muted text-center"><h1>Bienvenido a la biblioteca virtual H&F</h1></div>
<br><br>
<header class="container  d-flex justify-content-center align-items-center">
    <br>
    <div class="d-flex flex-column justify-content-center align-items-center">
    <img src="./img/portada1.jpg" alt="" width="500"></div></header>
    <br>
    <div>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolore neque accusamus dolorem adipisci omnis nesciunt hic cum ipsum tempore natus rerum veritatis illo, eius officiis ipsam repudiandae? Ea rerum illum provident eum cum nulla corrupti quod facilis esse ipsa, veniam distinctio impedit illo debitis velit quisquam est nesciunt saepe sed enim repudiandae similique. Perferendis, vero possimus eaque soluta, magnam, neque omnis dolorem eveniet ipsam sapiente beatae. Soluta magni molestias voluptas qui facilis possimus eligendi laboriosam, hic perspiciatis consectetur deserunt repellendus eaque expedita, laborum quo, aliquid quod incidunt in iusto illum voluptate? Soluta fugit deleniti officiis voluptate minima quaerat alias repellat!
        
    </p>  
</div> 

<section class="hero__container container">
    <h1 class="hero__title">Las mejores lecturas de lo que va de año 2022</h1>
    <br>
    <p class="hero__paragraph">Elige el libro que mas te guste de este listado y solicitalo en nuestra sucursal presencial.</p>
    <button type="button" class="btn btn-success">descubrir ahora</button> 
</section>
</header>
<br><br>

<main>    

<section class="knowledge">
    <div class="knowledge__container container">
        <div class="knowledege__texts">
            <h2 class="subtitle">Cursos online gratuitos para toda la familia</h2>
            <p class="knowledge__paragraph">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Excepturi,
                aliquam nemo in facere suscipit at delectus unde labore ad officia iste accusantium eaque
                aperiam laborum est voluptate totam? Modi, obcaecati?</p>
            <button type="button" class="btn btn-success">Entra a todos curso</button>
        </div>


    </div>
    <br><br>
</section>

<div class="row">
    <br>
    <div class="">
      <div class="card">
<section class="price container">
    <h2 class="subtitle">Cursos online pago con certificación semestral</h2>


    
    <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">English Level  Beginner</h5>
              <p class="card-text">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Illum cum laborum, commodi placeat magni earum quas id alias suscipit vero?</p>
              <a href="#" class="btn btn-primary">¡Empezar ahora!</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">English Pre intermediate</h5>
              <p class="card-text">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Necessitatibus dolorum sit vitae odit? Cupiditate neque, labore architecto eius obcaecati quas!</p>
              <a href="#" class="btn btn-primary">¡Empezar ahora!</a>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">English Intermediate</h5>
              <p class="card-text">Lorem ipsum dolor sit, amet consectetur adipisicing elit. A magni voluptatum reprehenderit atque saepe dolore quos optio fugit. Laborum, earum.</p>
              <a href="#" class="btn btn-primary">¡Empezar ahora!</a>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">English Level Conversational</h5>
              <p class="card-text">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Possimus soluta aperiam dignissimos tempore adipisci porro maxime in velit impedit ut?</p>
              <a href="#" class="btn btn-primary">¡Empezar ahora!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>


    <br><br>

    <section class="questions__offer text-center">
        <h2 class="subtitle">Revisa todos nuestros libros</h2>
        <p class="questions__copy">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet ratione
            architecto magnam, officiis ex porro vero est voluptates quaerat quibusdam illo veniam reprehenderit
            eius atque tempora iure ab non autem.</p>
            <button type="button" class="btn btn-success">Listado de libros actualizado 2022</button>
    </section>
    <br>
    <br>
    <br>
</main>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop

@section('footer')

<footer class="">
  <div class="container  align-items-center">
    <div class="card bg-ligth textw-white text-center">
  
    <section>   
        <form class="" action="https://formspree.io/f/mknkkrkj" method="POST">
            <p class="footer__newsletter">Suscribete a la newsletter</p>
            <div class="">
                <input type="email" placeholder="Email:" class="footer__input" name="_replyto">
                <input type="submit" value="Registrate" class="footer__submit">
            </div>
        </form>
    </section>

    <section class="footer__copy">
        <div class="footer__social">
            <a href="#" class="footer__icons"><img src="./img/twitter.jpg" class="footer__img" width="30"></a>
            <a href="#" class="footer__icons"><img src="./img/youtube-logo.jpg" class="footer__img" width="30"></a>
            <a href="#" class="footer__icons"><img src="./img/descarga.jpg" class="footer__img" width="30"></a>
        </div>

        <p class="footer__copyright">Derechos reservados &copy; Francisca Ampuero & Hanz Caroca</p>
    </section>
  </div>
</div>
</footer>
    
@stop