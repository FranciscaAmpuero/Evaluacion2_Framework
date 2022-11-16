<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
        <link rel="stylesheet" href="./css/style.css">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--tw-bg-opacity: 1;background-color:rgb(255 255 255 / var(--tw-bg-opacity))}.bg-gray-100{--tw-bg-opacity: 1;background-color:rgb(243 244 246 / var(--tw-bg-opacity))}.border-gray-200{--tw-border-opacity: 1;border-color:rgb(229 231 235 / var(--tw-border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{--tw-shadow: 0 1px 3px 0 rgb(0 0 0 / .1), 0 1px 2px -1px rgb(0 0 0 / .1);--tw-shadow-colored: 0 1px 3px 0 var(--tw-shadow-color), 0 1px 2px -1px var(--tw-shadow-color);box-shadow:var(--tw-ring-offset-shadow, 0 0 #0000),var(--tw-ring-shadow, 0 0 #0000),var(--tw-shadow)}.text-center{text-align:center}.text-gray-200{--tw-text-opacity: 1;color:rgb(229 231 235 / var(--tw-text-opacity))}.text-gray-300{--tw-text-opacity: 1;color:rgb(209 213 219 / var(--tw-text-opacity))}.text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}.text-gray-600{--tw-text-opacity: 1;color:rgb(75 85 99 / var(--tw-text-opacity))}.text-gray-700{--tw-text-opacity: 1;color:rgb(55 65 81 / var(--tw-text-opacity))}.text-gray-900{--tw-text-opacity: 1;color:rgb(17 24 39 / var(--tw-text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--tw-bg-opacity: 1;background-color:rgb(31 41 55 / var(--tw-bg-opacity))}.dark\:bg-gray-900{--tw-bg-opacity: 1;background-color:rgb(17 24 39 / var(--tw-bg-opacity))}.dark\:border-gray-700{--tw-border-opacity: 1;border-color:rgb(55 65 81 / var(--tw-border-opacity))}.dark\:text-white{--tw-text-opacity: 1;color:rgb(255 255 255 / var(--tw-text-opacity))}.dark\:text-gray-400{--tw-text-opacity: 1;color:rgb(156 163 175 / var(--tw-text-opacity))}.dark\:text-gray-500{--tw-text-opacity: 1;color:rgb(107 114 128 / var(--tw-text-opacity))}}
        </style>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <body class="antialiased">

            <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                <img src="./img/logo3.png" alt="" width="100"> 
            <div class="container">
              <a class="navbar-brand" href="{{ url("/")}}">Biblioteca Virtual</a>
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
                @if (Route::has('login'))
                    <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
                        @auth
                            <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>
    
                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </nav>
    
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
                </section>
                <br><br>
            
                <section class="questions__offer text-center">
                    <h2 class="subtitle">¿Quieres ser socio de Biblioteca H&F</h2>
                    <p class="questions__copy">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates vitae deserunt quos nostrum nemo animi dicta nihil nulla, minima aperiam molestias autem voluptatem laboriosam porro ducimus optio ab iste. Dolore vero rerum distinctio recusandae beatae ab? Corrupti rerum, maiores culpa quae tempora voluptatem reiciendis necessitatibus in enim ullam esse hic?</p>
                        <button type="button" class="btn btn-success">Hazte socio?</button>
                </section>
            </section>
            </main>
                </div>
                
                        <div class="flex items-center">
                            @extends('layouts.footer')
                            
                        </div>
                    
        
                    
                </div>
        </div>
      
    </body>
</html>
