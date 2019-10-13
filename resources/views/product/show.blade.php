@extends('layouts.app')

@section('title', 'Product')

@section('content')
<div class="table-responsive">
<table class="table table-sm table-hover">
  <thead class="thead-dark">
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Descrição</th>
      <th>Preço</th>
      <th>Tipo</th>
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
</div>

@endsection