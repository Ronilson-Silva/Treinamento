@extends('layouts.main')

@section('title','Cadastrar Produtos')
    
@section('conteudo')
<div id="event-create-conteiner" class="col-md-6 offset-md-3">
    <h2>Cadastrar Produtos</h2>
<form action="/products" name="product" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="formFileSm" class="form-label">Selecione o arquivo</label>
        <input class="form-control form-control-sm" id="file" name="file" type="file">
      </div>
    <div class="mb-3">
      <label for="name" class="form-label">Produto</label>
      <input type="text" class="form-control" name="name" id="name" value="teste" placeholder="Cadastrar produto">
    </div>
    <div class="mb-3">
        <label for="qtn" class="form-label">Quantidade</label>
        <input type="number" class="form-control" name="qtn" id="qtn" value="" min="1" step="1">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">Valor</label>
        <input type="number" class="form-control" name="price" id="price" value="" min="1" step=".01">
    </div>
    <div class="mb-3">
        <label for="descripion" class="form-label">Descrição</label>
        <textarea class="form-control" name="description" id="description" placeholder="Descrição">Descrição</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>
</div>
@endsection

