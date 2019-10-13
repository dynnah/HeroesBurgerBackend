@extends('layouts.app')

@section('title', 'Create Product')

@section('content')
<div class="card">
  <div class="card-header">
    Add Product
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
    <form method="post" action="{{ route('products.store') }}">
      <div class="form-group">
        @csrf
        <label for="nome">Nome:</label>
        <input type="text" class="form-control" id="nome" name="nome" />
      </div>
      <div class="form-group">
        <label for="descricao">Descrição do Produto:</label>
        <input type="text" class="form-control" id="descricao" name="descricao" />
      </div>
      <div class="form-group">
        <label for="preco">Preço:</label>
        <input type="text" class="form-control" id="preco" name="preco" />
      </div>
      <div class="form-group">
        <label for="tipo">Tipo do Produto:</label>
        <input type="text" class="form-control" id="tipo" name="tipo" />
      </div>
      <button type="submit" class="btn btn-primary">Create Product</button>
    </form>
  </div>
</div>
@endsection