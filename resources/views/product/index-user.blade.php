@extends('layouts.app')

@section('title', 'Products')

@section('content')
@if(session()->get('success'))
<div class="alert alert-success">
 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div><br />
@endif
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
    @foreach($products as $product)
    <tr>
      <td>{{$product->id}}</td>
      <td>{{$product->nome}}</td>
      <td>{{$product->descricao}}</td>
      <td>{{$product->preco}}</td>
      <td>{{$product->tipo}}</td>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
@endsection