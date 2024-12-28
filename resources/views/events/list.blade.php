@extends('layouts.main')

@section('title','Criar Eventos')
    
@section('conteudo')
    <div class="row">
        <div class="col-6">
            <h3>Lista de Eventos</h3>
        </div>
        <div class="col-6">
            <a href="/events/create" class="btn btn-primary btn-sm">Cadastrar Eventos</a>
        </div>
    </div>
    <table class="table table-condensed table-dark table-hover">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">titulo</th>
            <th scope="col">Descrição</th>
            <th scope="col">Cidade</th>
            <th width="10px" scope="col">Atualizar</th>
            <th width="10px" scope="col">Deletar</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($events as $event)
            <tr>
                <th scope="row">{{$event->id}}</th>
                <td>{{$event->title}}</td>
                <td>{{$event->descripion}}</td>
                <td>{{$event->city}}</td>
                <td><a href="{{$event->id}}" class="btn btn-success btn-sm">Atualizar</a></td>
                <td><a href="{{$event->id}}" class="btn btn-danger btn-sm">Deletar</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection