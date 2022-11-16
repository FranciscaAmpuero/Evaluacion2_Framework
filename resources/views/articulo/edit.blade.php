@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Editar registros</h1>    
@stop
@section('content')

<form action="/libros/{{ $libro->id }}" method="POST">
    @csrf
    @method('PUT')
    <div class="mb-3">
        <label for="" class="form-label">Nombre</label>
        <input id="nombre" name="nombre" type="text" class="form-control" value="{{ $libro->nombre }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Autor</label>
        <input id="autor" name="autor" type="text" class="form-control" value="{{ $libro->autor }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Editorial</label>
        <input id="editorial" name="editorial" type="text" class="form-control" value="{{ $libro->editorial }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Categoria</label>
        <input id="categoria" name="categoria" type="text" class="form-control" value="{{ $libro->categoria }}">
    </div>
    <div class="mb-3">
        <label for="" class="form-label">Descripcion</label>
        <input id="descripcion" name="descripcion" type="text" class="form-control" value="{{ $libro->descripcion }}">
    </div class="mb-3">
    <a href="/libros" class="btn btn-secondary" tabindex="6">Cancelar</a>
    <button type="submit" class="btn btn-primary" tabindex="7">Guardar</button>


</form>




@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
