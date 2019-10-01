@extends('layouts.layout')

@section('title', 'Product')

@section('content')
<table class="table table-striped">
  <thead>
    <tr>
      <td>ID</td>
      <td>Nome</td>
      <td>Descrição</td>
      <td>Preço</td>
      <td>Tipo</td>
    </tr>
  </thead>
  <tbody>
   <tr>
      <td>{{$product->id}}</td>
      <td>{{$product->nome}}</td>
      <td>{{$product->descricao}}</td>
      <td>{{$product->preco}}</td>
      <td>{{$product->tipo}}</td>
      </tr>
  </tbody>
</table>

@endsection