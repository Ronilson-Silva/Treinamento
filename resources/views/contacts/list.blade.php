@extends('layouts.main')

@section('title','Lista de Contatos')
    
@section('conteudo')
    <div class="row">
        <div class="col-6">
            <h3>Lista de Contatos</h3>
        </div>
        <div class="col-6">
            <a href="/contacts/create" class="btn btn-primary btn-sm">Cadastrar Contato</a>
        </div>
    </div>
    <table class="table table-condensed table-dark table-hover">
        <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Nome</th>
            <th scope="col">Contato</th>
            <th scope="col">Email</th>
            <th width="10px" scope="col">Atualizar</th>
            <th width="10px" scope="col">Deletar</th>
        </tr>
        </thead>
        <tbody>
            @foreach ($contacts as $contact)
            <tr>
                <th scope="row">{{$contact->id}}</th>
                <td>{{$contact->name}}</td>
                <td>{{$contact->contact}}</td>
                <td>{{$contact->email}}</td>
                <td><a href="{{$contact->id}}" class="btn btn-success btn-sm">Atualizar</a></td>
                <td><a href="{{$contact->id}}" class="btn btn-danger btn-sm">Deletar</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
@endsection