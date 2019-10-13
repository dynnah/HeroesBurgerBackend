@extends('layouts.app')

@section('title', 'Products')

@section('content')
@if(session()->get('success'))
<div class="alert alert-success alert-block">
	<button type="button" class="close" data-dismiss="alert">×</button>	
        <strong>{{ session('success') }}</strong>
</div>
@endif
<div class="table-responsive">
<table class="table table-hover">
  <thead class="thead-dark">
    <tr>
      <th>ID</th>
      <th>Nome</th>
      <th>Descrição</th>
      <th>Preço (R$)</th>
      <th>Tipo</th>
      <th>Action</th>
      <th colspan="2"><a href="{{ route('products.create') }}" class="btn btn-primary" role="button">Create Product</a></th>
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
      <td><a href="{{ route('products.show', $product->id) }}" class="btn btn-primary" role="button">Show Product</a></td>
      <td><a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary" role="button">Edit</a></td>
      <td colspan="2">
        <form action="{{ route('products.destroy', $product->id)}}" method="post">
          @csrf
          @method('DELETE')
          <button class="btn btn-danger" type="submit">Delete</button>
        </form>
      </td>
    </tr>
    @endforeach
  </tbody>
</table>
</div>
<!-- <a href="{{ route('products.create') }}" class="btn btn-primary" role="button">Add Product</a> -->
@endsection