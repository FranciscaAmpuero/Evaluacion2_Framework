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
    <h1>Mostar todos los registros - CRUD</h1>
@stop

@section('content')

  
<a href="libros/create" class="btn btn-primary">Crear nuevo registro</a>
<table class="table table-dark table-striped table-bordered mt-4">
 <thead>
     <tr>
         <th scope="col">Id</th>
         <th scope="col">Nombre</th>
         <th scope="col">Autor</th>
         <th scope="col">Editorial</th>
         <th scope="col">Categoria</th>
         <th scope="col">Descripcion</th>
         <th scope="col">Acciones</th>
     </tr>
 </thead>
 <tbody>
     @foreach ($libros as $libro)
     <tr>
         <td>{{ $libro->id}}</td>
         <td>{{ $libro->nombre}}</td>
         <td>{{ $libro->autor}}</td>
         <td>{{ $libro->editorial}}</td>
         <td>{{ $libro->categoria}}</td>
         <td>{{ $libro->descripcion}}</td>
         <td>
            <form action="{{ route ('libros.destroy', $libro->id)}}" method="POST">
             <a href="/libros/{{ $libro->id}}/edit" class="btn btn-info">Editar</a>
             @csrf
             @method('DELETE')
             <button type="submit" class="btn btn-danger">Borrar</button>
            </form>
         </td>
     </tr>
         
     @endforeach

 </tbody>

</table>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop