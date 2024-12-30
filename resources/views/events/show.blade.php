@extends('layouts.main')

@section('title','Atualizar Evento')
    
@section('conteudo')

<div id="event-create-conteiner" class="col-md-6 offset-md-3">
    <h3>Atualizar Evento</h3>
<form action="/events" name="evento" method="POST" enctype="multipart/form-data">
    @csrf
    <div class="mb-3">
        <label for="image" class="form-label">Selecione o arquivo</label>
        <input class="form-control form-control-sm" id="image" name="image" type="file"><br>
        <img src="/img/{{$event->image}}" width="100px" alt="{{$event->title}}">
      </div>
    <div class="mb-3">
      <label for="title" class="form-label">Evento</label>
      <input type="text" class="form-control" value="{{$event->title}}" name="title" id="title" placeholder="titulo">
      <input type="text" class="form-control" value="{{$event->id}}" name="id" id="title" value=""  placeholder="titulo">
    </div>
    <div class="mb-3">
        <label for="city" class="form-label">Cidade</label>
        <input type="text" class="form-control" value="{{$event->city}}" name="city" id="city" placeholder="Cidade">
    </div>
    <div class="mb-3">
        <label for="private" class="form-label">Privado</label>
        <select class="form-control" name="private" id="private">
            <option value="0" @if ($event->private==0) selected @endif>Sim</option>
            <option value="1" @if ($event->private==1) selected @endif>Não</option>
        </select>
    </div>
    <div class="mb-3">
        <label for="descripion" class="form-label">Descrição</label>
        <textarea class="form-control" name="descripion" id="descripion" placeholder="Descrição">{{$event->descripion}}</textarea>
    </div>
    
    <button type="submit" class="btn btn-primary">Cadastrar</button>
    <a href="/events/list" class="btn btn-info">Voltar</a>
  </form>
</div>
@endsection
