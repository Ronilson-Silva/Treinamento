@extends('layouts.main')

@section('title','Criar Eventos')
    
@section('conteudo')
    <div class="row">
        <div class="col-6">
            <h3>Lista de Eventos</h3>
        </div>
        <div class="col-6">
           
        </div>
    </div>
    @if ($search)
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <strong>Atenção!</strong> Pesquisa realizada <strong>{{$search}}</strong>.
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif
    <div class="container">
        @if (count($events)==0)
        <div class="col-6 col-sm-6">
            <p>Total de registros: 0</p>
        </div>
        <div class="col-6 col-sm-2">
            <a href="/events/create" class="btn btn-primary btn-sm">Cadastrar Eventos</a>
        </div>
        @else
        <div class="row">
            <div class="col-6 col-sm-6">
                Total de registros: {{$linha = count($events)}} <a href="/events/list">Ver Todos</a>
            </div>
            <div class="col-6 col-sm-2">
                <a href="/events/create" class="btn btn-primary btn-sm">Cadastrar Eventos</a>
            </div>
            <div class="col-6 col-sm-4">
            <form action="/events/list" method="GET" name="procurar">
                <div class="input-group mb-3">
                    <input type="text" name="search" class="form-control" placeholder="Procurar..." aria-label="Recipient's username" aria-describedby="basic-addon2" required  autofocus>
                    <div class="input-group-append">
                    <button class="btn btn-outline-primary" type="submit">Procurar</button>
                    </div>
                </div>
                </form>

            </div>
              <div class="col-6 col-sm-2">
                <a href="/events/create" class="btn btn-primary btn-sm">Cadastrar Eventos</a>
              </div>
            </div>
        </div>          
        <table class="table table-condensed table-dark table-hover">
            <thead>
            <tr>
                <th scope="col">Id</th>
                <th scope="col">titulo</th>
                <th scope="col">Descrição</th>
                <th scope="col">Cidade</th>
                <th scope="col">Data</th>
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
                    <td>{{date('d/m/Y', strtotime($event->data))}}</td>
                    <td><a href="/events/edit/{{$event->id}}" class="btn btn-success btn-sm">Atualizar</a></td>
                    <td>
                        <form action="/events/{{$event->id}}" method="POST">
                            @csrf
                            @method('DELETE')
                            <button input="submit" class="btn btn-danger btn-sm"> Deletar</button>    
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    @endif
@endsection