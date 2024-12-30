@extends('layouts.main')

@section('title','Criar Eventos')
    
@section('conteudo')
<div id="event-create-conteiner" class="col-md-6 offset-md-3">
    <h3>Crie Seu Evento</h3>
<form action="/events" name="evento" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="image" class="form-label">Selecione o arquivo</label>
        <input class="form-control form-control-sm" id="image" name="image" type="file" required>
      </div>
    <div class="mb-3">
      <label for="title" class="form-label">Evento</label>
      <input type="text" class="form-control" name="title" id="title" value="" placeholder="titulo" required>
    </div>
    <div class="mb-3">
        <label for="city" class="form-label">Cidade</label>
        <input type="text" class="form-control" name="city" id="city" value="" placeholder="Cidade" required>
    </div>
    <div class="mb-3">
        <label for="data" class="form-label">Data do Evento</label>
        <input type="date" class="form-control" name="data" id="data" value="" placeholder="" required>
    </div>
    <div class="mb-3">
        <label for="private" class="form-label">Privado</label>
        <select class="form-control" name="private" id="private">
            <option value="0">Sim</option>
            <option value="1">Não</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="descripion" class="form-label">Descrição</label>
        <textarea class="form-control" name="descripion" id="descripion" placeholder="Descrição">Descrição</textarea>
    </div>
    <div class="mb-3">
      <input type="checkbox" name="itens[]" id="" value="Cerveja"> Cerveja<br>
      <input type="checkbox" name="itens[]" id="" value="Open Food"> Open Food<br>
      <input type="checkbox" name="itens[]" id="" value="Open Bar"> Open Bar<br>
      <input type="checkbox" name="itens[]" id="" value="Wi-Fi"> Wi-Fi<br>
      <input type="checkbox" name="itens[]" id="" value="Area Vip"> Area Vip<br>
    </div>
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </form>
</div>
@endsection
