
@extends('layouts.main')

@section('title','Lista de Produtos')
    
@section('conteudo')
<div>
    

<div class="row justify-content-end">
    <div class="col-6">
        <h3>Listar produtos</h3>
    </div>
    <div class="col-6">
        <a href="/products/create" class="btn btn-primary btn-sm">Cadastrar Produto</a>
    </div>
  </div>
<table class="table table-condensed table-dark table-hover">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Produto</th>
            <th scope="col">Preço</th>
            <th scope="col">Descrição</th>
            <th scope="col">Data</th>
            <th width="10px" scope="col">Atualizar</th>
            <th width="10px" scope="col">Deletar</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($products as $product)
        <tr>
            <th scope="row">{{$product->id}}</th>
            <td>{{$product->name}}</td>
            <td>R$ {{number_format($product->price, 2, ',','.')}}</td>
            <td>{{$product->description}}</td>
            <td>{{date('d/m/Y', strtotime($product->created_at))}}</td>
            <td><a href="{{$product->id}}" class="btn btn-success btn-sm">Atualizar</a></td>
            <td><a href="{{$product->id}}" class="btn btn-danger btn-sm">Deletar</a></td>
        </tr>
    @endforeach  
    </tbody>
</table>
@endsection

