@extends('layouts.app')

@section('title', 'UD5. ORM')

@section('content')

  <h2>Productos</h2>

  <table>
    <tr>
      <th>Id</th>
      <th>Nombre</th>
      <th>Descripcion</th>
      <th>Precio</th>
      <th>Stock</th>
      <th>Tienda</th>      
    </tr>
    @foreach($productos as $i)

      <tr>
        <td>{{$i->id}}</td>
        <td>{{$i->name}}</td>
        <td>{{$i->description}}</td>
        <td>{{$i->price}}</td>
        <td>{{$i->name}}</td>
      </tr>

    @endforeach
  </table>

@endsection
