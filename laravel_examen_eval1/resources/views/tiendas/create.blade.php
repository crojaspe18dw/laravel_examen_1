@extends('layouts.app')

@section('title', 'Examen')

@section('content')

  <h3>Nueva tienda</h3>
  <form action="/tiendas" method="POST">
    @csrf
    Nombre:<br>
    <input type="text" name="nombre">
    <br><br>
    descripcion:<br>
    <input type="text" name="descripcion">
    <br><br>
    password:<br>
    <input type="text" name="contraseña">
    <br><br>
    email:<br>
    <input type="text" name="email">
    <br><br>
    likes:<br>
    <input type="number" name="likes">
    <br><br>
    

    <button class="buttonform" type="submit" name="submit">Crear</button>
  </form>
  <br>

@endsection
