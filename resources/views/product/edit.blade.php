@extends('layouts.app')

@section('title', 'Edit Product')

@section('content')
<div class="card">
  <div class="card-header">
    Edit Product
  </div>
  <div class="card-body">
    @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
    @endif
    <form method="post" action="{{ route('products.update', $product->id)}}">
      <div class="form-group">
        @csrf
        @method('PATCH')
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" value="{{ $product->nome }}" />
      </div>
      <div class="form-group">
        <label for="descricao">Descrição do Produto:</label>
        <input type="text" class="form-control" id="descricao" name="descricao" value="{{ $product->descricao }}" />
      </div>
      <div class="form-group">
        <label for="preco">Preço:</label>
        <input type="text" class="form-control" id="preco" name="preco" value="{{ $product->preco }}" />
      </div>
      <div class="form-group">
        <label for="tipo">Tipo:</label>
        <input type="text" class="form-control" id="tipo" name="tipo" value="{{ $product->tipo }}" />
      </div>
      <button type="submit" class="btn btn-primary">Update Product</button>
    </form>
  </div>
</div>
@endsection