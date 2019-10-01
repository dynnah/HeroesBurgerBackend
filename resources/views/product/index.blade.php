@extends('layouts.layout')

@section('title', 'Products')

@section('content')
@if(session()->get('success'))
<div class="alert alert-success">
 
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div><br />
@endif
<table class="table table-striped">
  <thead>
    <tr>
      <td>Id</td>
      <td>Nome</td>
      <td>Descrição</td>
      <td>Preço</td>
      <td>Tipo</td>
      <td colspan="2">Action</td>
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
      <td><a href="{{ route('products.create', $product->id) }}" class="btn btn-primary" role="button">Create Product</a></td>
      <td><a href="{{ route('products.index', $product->id) }}" class="btn btn-primary" role="button">Show Product</a></td>
      <td><a href="{{ route('products.edit', $product->id) }}" class="btn btn-primary" role="button">Edit</a></td>
      <td>
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
<!-- <a href="{{ route('products.create') }}" class="btn btn-primary" role="button">Add Product</a> -->
@endsection