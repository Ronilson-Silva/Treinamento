@extends('layouts.main')

@section('title','Cadastrar Contato')
    
@section('conteudo')
<div id="event-create-conteiner" class="col-md-6 offset-md-3">
    <h3>Cadastrar Contatos</h3>
<form action="/contacts" name="contato" method="POST">
    @csrf
    <div class="mb-3">
      <label for="name" class="form-label">Nome</label>
      <input type="text" class="form-control" name="name" id="name" value="" placeholder="Nome">
    </div>
    <div class="mb-3">
        <label for="contact" class="form-label">Telefone</label>
        <input type="text" class="form-control" name="contact" id="contact" value="" placeholder="Telefone">
    </div>
    <div class="mb-3">
        <label for="email" class="form-label">E-mail</label>
        <input type="email" class="form-control" name="email" id="email" value="" placeholder="Cadastrar Email">
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>
</div>
@endsection
